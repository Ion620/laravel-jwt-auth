<?php

namespace App\Http\Action\Subject;

use App\Models\Subject;

class CreateSubjectAction
{
    private $subject;
    private $subject_id;
    public function __construct($subject_id)
    {
        $this->subject_id = $subject_id;
    }

    public static function perform($subject_id)
    {
        return (new static($subject_id))->handle();
    }
    public function handle()
    {
        try {
            $this->index();

            return [
                'status_code'   => 200,
                'succesfull'=>$this->subject
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
        $this->subject=Subject::create($this->subject_id);
        return $this;

    }
}
