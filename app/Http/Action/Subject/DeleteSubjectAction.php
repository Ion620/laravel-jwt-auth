<?php

namespace App\Http\Action\Subject;

use App\Models\Subject;

class DeleteSubjectAction
{
    private $id;
    private $subject;
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
                'group delete' => $this->subject
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
        $this->subject= Subject::destroy($this->id);
        return $this;
    }
}
