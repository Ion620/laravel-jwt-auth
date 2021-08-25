<?php

namespace App\Http\Requests\Teacher;

use App\Http\Action\Teacher\DeleteTeacherAction;
use Illuminate\Foundation\Http\FormRequest;

class DeleteTeacherRequest extends FormRequest
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
        return DeleteTeacherAction::perform($this->id);
    }
}
