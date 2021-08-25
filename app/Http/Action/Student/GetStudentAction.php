<?php

namespace App\Http\Action\Student;

use App\Models\Student;

class GetStudentAction
{
    private $student;
    private $search;
    public function __construct($search)
    {
        $this->search = $search;
    }

    public static function perform($search)
    {
        return (new static($search))->handle();
    }
    public function handle()
    {
        try {
            $this->index();

            return [
                'status_code'   => 200,
                'groups'          => $this->student
            ];
        }catch (\Throwable $exception){
            return [
                'status_code'   => 422,
                'groups'          => [],
                'error'         => $exception->getMessage()
            ];
        }
    }
    public function index(){
        $param = $this->search->get('param');
        $this->student = Student::where('name_student', 'like', "%{$param}%")
            ->paginate(10);
        return $this;
    }
}
