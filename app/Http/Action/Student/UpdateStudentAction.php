<?php

namespace App\Http\Action\Student;

class UpdateStudentAction
{
    private $id;
    private $student;
    private $students;
    public function __construct($id,$student)
    {
        $this->id = $id;
        $this->student=$student;
    }
    public static function perform($id,$student)
    {
        return (new static($id,$student))->handle();
    }
    public function handle()
    {
        try {
            $this->update();

            return [
                'status_code'   => 200,
                'students'          => $this->students
            ];
        }catch (\Throwable $exception){
            return [
                'status_code'   => 422,
                'students'          => [],
                'error'         => $exception->getMessage()
            ];
        }
    }
    public function update(){
        $this->students= Group::find($this->id);
        $this->students->update($this->student);
        return $this;

    }
}
