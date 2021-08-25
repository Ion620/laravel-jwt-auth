<?php

namespace App\Http\Action\Group;

use App\Models\Group;

class DeleteGroupAction
{
    private $id;
    private $group;
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
                'group delete' => $this->group
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
        $this->group= Group::destroy($this->id);
        return $this;
    }
}
