<?php

namespace App\Http\Action\Rosclad;

use App\Models\Rosclad;

class GetRoscladAction
{
    private $rosclad;
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
                'groups'          => $this->rosclad
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
        $this->rosclad = Rosclad::where('numb_lec', 'like', "%{$param}%")
            ->OrWhere('day', 'like', "%{$param}%")
            ->paginate(10);
        return $this;
    }

}
