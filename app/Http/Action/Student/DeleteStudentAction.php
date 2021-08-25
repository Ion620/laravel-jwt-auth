<?php

namespace App\Http\Action\Student;

use App\Models\Student;

class DeleteStudentAction
{
    private $id;
    private $student;
    public function __construct($id)
    {
        $this->id = $id;
    }

    public static function perform($id)
    {
        return (new static($id))->handle();
    }

    public function handle()
    {
        try {
            $this->delete();

            return [
                'status_code'   => 200,
                'group delete' => $this->student
            ];
        }catch (\Throwable $exception){
            return [
                'status_code'   => 422,
                'groups'          => [],
                'error'         => $exception->getMessage()
            ];
        }
    }
    public function delete(){
        $this->student= Student::destroy($this->id);
        return $this;
    }
}
