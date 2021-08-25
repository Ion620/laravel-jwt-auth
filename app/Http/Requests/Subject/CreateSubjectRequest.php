<?php

namespace App\Http\Requests\Subject;

use App\Http\Action\Subject\CreateSubjectAction;
use Illuminate\Foundation\Http\FormRequest;

class CreateSubjectRequest extends FormRequest
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
            'name_subj'=>'required | string',
            'numb_semest'=>'required | integer'
        ];
    }
    public function perform(){
        try {
            return CreateSubjectAction::perform($this->all());
        }catch (\Throwable $exception) {
            ReportException::report($exception);
            return [
                'status_code' => 422,
                'error'       => $exception->getMessage()
            ];
        }

    }
}
