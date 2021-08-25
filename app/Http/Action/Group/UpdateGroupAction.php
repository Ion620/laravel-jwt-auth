<?php

namespace App\Http\Action\Group;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;

class UpdateGroupAction
{
    private $id;
    private $group;
    private $groups;
    public function __construct($id,$group)
    {
        $this->id = $id;
        $this->group=$group;
    }
    public static function perform($id,$group)
    {
        return (new static($id,$group))->handle();
    }
    public function handle()
    {
        try {
            $this->update();

            return [
                'status_code'   => 200,
                'jobs'          => $this->groups
            ];
        }catch (\Throwable $exception){
            return [
                'status_code'   => 422,
                'jobs'          => [],
                'error'         => $exception->getMessage()
            ];
        }
    }
    public function update(){
        $this->groups= Group::find($this->id);
        $this->groups->update($this->group);
        return $this;

    }
}
