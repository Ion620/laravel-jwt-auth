<?php

namespace App\Http\Action\Rosclad;

use App\Models\Rosclad;

class DeleteRoscladAction
{
    private $id;
    private $rosclad;
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
                'group delete' => $this->rosclad
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
        $this->rosclad= Rosclad::destroy($this->id);
        return $this;
    }
}
