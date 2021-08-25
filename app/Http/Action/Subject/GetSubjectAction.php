<?php

namespace App\Http\Action\Subject;

use App\Models\Subject;

class GetSubjectAction
{
    private $subject;
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
                'groups'          => $this->subject
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
        $this->subject = Subject::where('name_subj', 'like', "%{$param}%")
            ->OrWhere('numb_semest', 'like', "%{$param}%")
            ->paginate(10);
        return $this;
    }
}
