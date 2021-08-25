<?php

namespace App\Http\Action\Student;

use App\Models\Student;

class CreateStudentAction
{
    private $student;
    private $student_id;
    public function __construct($student_id)
    {
        $this->student_id = $student_id;
    }

    public static function perform($student_id)
    {
        return (new static($student_id))->handle();
    }
    public function handle()
    {
        try {
            $this->index();

            return [
                'status_code'   => 200,
                'succesfull'=>$this->student
            ];
        }catch (\Throwable $exception){
            return [
                'status_code'   => 422,
                'students'          => [],
                'error'         => $exception->getMessage()
            ];
        }
    }
    public function index(){
        $this->student=Student::create($this->student_id);
        return $this;

    }
}
