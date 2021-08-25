<?php

namespace App\Http\Action\Rosclad;

use App\Models\Rosclad;

class CreateRoscladAction
{
    private $rosclad;
    private $rosclad_id;
    public function __construct($rosclad_id)
    {
        $this->rosclad_id = $rosclad_id;
    }

    public static function perform($rosclad_id)
    {
        return (new static($rosclad_id))->handle();
    }
    public function handle()
    {
        try {
            $this->index();

            return [
                'status_code'   => 200,
                'succesfull'=>$this->rosclad
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
        $this->rosclad=Rosclad::create($this->rosclad_id);
        return $this;

    }
}
