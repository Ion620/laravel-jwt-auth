<?php

namespace App\Http\Action\Rosclad;

use App\Models\Rosclad;

class UpdateRoscladAction
{
    private $id;
    private $rosclad;
    private $rosclads;
    public function __construct($id,$rosclad)
    {
        $this->id = $id;
        $this->rosclad=$rosclad;
    }
    public static function perform($id,$rosclad)
    {
        return (new static($id,$rosclad))->handle();
    }
    public function handle()
    {
        try {
            $this->update();

            return [
                'status_code'   => 200,
                'students'          => $this->rosclads
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
        $this->rosclads= Rosclad::find($this->id);
        $this->rosclads->update($this->rosclad);
        return $this;

    }
}
