<?php

namespace App\Http\Requests\Group;

use App\Http\Action\Group\DeleteGroupAction;
use Illuminate\Foundation\Http\FormRequest;

class DeleteGroupRequest extends FormRequest
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
        return DeleteGroupAction::perform($this->id);
    }
}
