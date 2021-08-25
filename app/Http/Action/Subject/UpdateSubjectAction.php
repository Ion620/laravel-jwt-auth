<?php

namespace App\Http\Action\Subject;

class UpdateSubjectAction
{
    private $id;
    private $subject;
    private $subjects;
    public function __construct($id,$subject)
    {
        $this->id = $id;
        $this->subject=$subject;
    }
    public static function perform($id,$subject)
    {
        return (new static($id,$subject))->handle();
    }
    public function handle()
    {
        try {
            $this->update();

            return [
                'status_code'   => 200,
                'students'          => $this->subjects
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
        $this->subjects= Group::find($this->id);
        $this->subjects->update($this->subject);
        return $this;

    }
}
