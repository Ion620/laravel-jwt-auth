<?php

namespace App\Http\Requests\Subject;

use App\Http\Action\Subject\UpdateSubjectAction;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSubjectRequest extends FormRequest
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
            'name_subj'=>'required | string',
            'numb_semest'=>'required | integer'
        ];

    }
    public function perform()
    {
        try {
            return UpdateSubjectAction::perform($this->id,$this->all());
        } catch (\Throwable $exception) {
            ReportException::report($exception);
            return [
                'status_code' => 422,
                'error'       => $exception->getMessage()
            ];
        }
    }
}
