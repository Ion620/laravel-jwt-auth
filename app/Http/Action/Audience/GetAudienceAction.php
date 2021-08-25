<?php

namespace App\Http\Action\Audience;

use App\Models\Audience;

class GetAudienceAction
{
    private $audience;
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
                'groups'          => $this->audience
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
        $this->audience = Audience::where('capacity', 'like', "%{$param}%")
            ->OrWhere('name_aud', 'like', "%{$param}%")
            ->paginate(10);
        return $this;
    }

}
