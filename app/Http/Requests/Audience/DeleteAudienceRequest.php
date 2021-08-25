<?php

namespace App\Http\Requests\Audience;

use App\Http\Action\Audience\DeleteAudienceAction;
use Illuminate\Foundation\Http\FormRequest;

class DeleteAudienceRequest extends FormRequest
{
    public $id;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
    public function perform(){
        return DeleteAudienceAction::perform($this->id);
    }
}
