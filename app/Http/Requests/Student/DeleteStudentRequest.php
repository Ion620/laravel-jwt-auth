<?php

namespace App\Http\Requests\Student;

use App\Http\Action\Student\DeleteStudentAction;
use Illuminate\Foundation\Http\FormRequest;
use function Symfony\Component\Translation\t;

class DeleteStudentRequest extends FormRequest
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
        return DeleteStudentAction::perform($this->id);
    }
}
