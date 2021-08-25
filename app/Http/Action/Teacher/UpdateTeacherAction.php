<?php

namespace App\Http\Action\Teacher;

use App\Models\Teacher;

class UpdateTeacherAction
{
    private $id;
    private $teacher;
    private $teachers;
    public function __construct($id,$teacher)
    {
        $this->id = $id;
        $this->teacher=$teacher;
    }
    public static function perform($id,$teacher)
    {
        return (new static($id,$teacher))->handle();
    }
    public function handle()
    {
        try {
            $this->update();

            return [
                'status_code'   => 200,
                'students'          => $this->teachers
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
        $this->teachers= Teacher::find($this->id);
        $this->teachers->update($this->teacher);
        return $this;

    }
}
