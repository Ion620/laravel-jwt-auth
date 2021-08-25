<?php

namespace App\Http\Action\Teacher;

use App\Models\Teacher;

class CreateTeacherAction
{
    private $teacher;
    private $teacher_id;
    public function __construct($teacher_id)
    {
        $this->teacher_id = $teacher_id;
    }

    public static function perform($teacher_id)
    {
        return (new static($teacher_id))->handle();
    }
    public function handle()
    {
        try {
            $this->index();

            return [
                'status_code'   => 200,
                'succesfull'=>$this->teacher
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
        $this->teacher=Teacher::create($this->teacher_id);
        return $this;

    }
}
