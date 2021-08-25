<?php

namespace App\Http\Requests\Student;

use App\Http\Action\Student\CreateStudentAction;
use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
{
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
            'id_group'=>'required | integer',
            'name_student'=>'required | string'
        ];
    }
    public function perform(){
        try {
            return CreateStudentAction::perform($this->all());
        }catch (\Throwable $exception) {
            ReportException::report($exception);
            return [
                'status_code' => 422,
                'error'       => $exception->getMessage()
            ];
        }

    }
}
