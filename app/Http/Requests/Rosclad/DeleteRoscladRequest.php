<?php

namespace App\Http\Requests\Rosclad;

use App\Http\Action\Rosclad\DeleteRoscladAction;
use Illuminate\Foundation\Http\FormRequest;

class DeleteRoscladRequest extends FormRequest
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
        return DeleteRoscladAction::perform($this->id);
    }
}
