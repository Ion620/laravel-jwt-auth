<?php

namespace App\Http\Action\Teacher;

use App\Models\Teacher;

class GetTeacherAction
{
    private $teacher;
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
                'groups'          => $this->teacher
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
        $this->teacher = Teacher::where('name_teacher', 'like', "%{$param}%")
            ->orWhere('position', 'like', "%{$param}%")
            ->orWhere('scientific_degree', 'like', "%{$param}%")
            ->paginate(5);
        return $this;
    }
}
