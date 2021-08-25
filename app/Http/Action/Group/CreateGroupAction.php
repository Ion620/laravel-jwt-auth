<?php

namespace App\Http\Action\Group;

use App\Models\Group;
use Illuminate\Support\Arr;

class CreateGroupAction
{
    private $group;
    private $group_id;
    public function __construct($group_id)
    {
        $this->group_id = $group_id;
    }

    public static function perform($group_id)
    {
        return (new static($group_id))->handle();
    }
    public function handle()
    {
        try {
            $this->index();

            return [
                'status_code'   => 200,
                'succesfull'=>$this->group
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
        $this->group=Group::create($this->group_id);
        return $this;

    }
}
