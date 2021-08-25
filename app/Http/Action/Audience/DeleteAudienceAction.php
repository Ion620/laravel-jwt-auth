<?php

namespace App\Http\Action\Audience;

use App\Models\Audience;

class DeleteAudienceAction
{
    private $id;
    private $audience;
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
                'group delete' => $this->audience
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
        $this->audience= Audience::destroy($this->id);
        return $this;
    }
}
