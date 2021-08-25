<?php

namespace App\Http\Action\Audience;

use App\Models\Audience;

class UpdateAudienceAction
{
    private $id;
    private $audience;
    private $audiences;
    public function __construct($id,$audience)
    {
        $this->id = $id;
        $this->audience=$audience;
    }
    public static function perform($id,$audience)
    {
        return (new static($id,$audience))->handle();
    }
    public function handle()
    {
        try {
            $this->update();

            return [
                'status_code'   => 200,
                'students'          => $this->audiences
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
        $this->audiences= Audience::find($this->id);
        $this->audiences->update($this->audience);
        return $this;

    }
}
