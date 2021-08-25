<?php

namespace App\Http\Requests\Subject;

use App\Http\Action\Subject\DeleteSubjectAction;
use Illuminate\Foundation\Http\FormRequest;

class DeleteSubjectRequest extends FormRequest
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
        return DeleteSubjectAction::perform($this->id);
    }
}
