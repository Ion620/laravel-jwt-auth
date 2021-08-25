<?php

namespace App\Http\Action\Audience;

use App\Models\Audience;

class CreateAudienceAction
{
    private $audience;
    private $audience_id;
    public function __construct($audience_id)
    {
        $this->audience_id = $audience_id;
    }

    public static function perform($audience_id)
    {
        return (new static($audience_id))->handle();
    }
    public function handle()
    {
        try {
            $this->index();

            return [
                'status_code'   => 200,
                'succesfull'=>$this->audience
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
        $this->audience=Audience::create($this->audience_id);
        return $this;

    }
}
