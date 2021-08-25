<?php

namespace App\Http\Requests\Teacher;

use App\Http\Action\Teacher\UpdateTeacherAction;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherRequest extends FormRequest
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
            'name_teacher'=>'required | string',
            'position'=> 'required | string',
            'scientific_degree'=>'required | string'
        ];
    }
    public function perform()
    {
        try {
            return UpdateTeacherAction::perform($this->id,$this->all());
        } catch (\Throwable $exception) {
            ReportException::report($exception);
            return [
                'status_code' => 422,
                'error'       => $exception->getMessage()
            ];
        }
    }
}
