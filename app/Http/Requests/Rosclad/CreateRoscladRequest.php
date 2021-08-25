<?php

namespace App\Http\Requests\Rosclad;

use App\Http\Action\Rosclad\CreateRoscladAction;
use Illuminate\Foundation\Http\FormRequest;

class CreateRoscladRequest extends FormRequest
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
            'id_subj'=>'required | integer',
            'id_teacher'=>'required | integer',
            'id_aud'=>'required | integer',
            'numb_lec'=>'required | integer',
            'day'=>'required | integer'
        ];
    }
    public function perform(){
        try {
            return CreateRoscladAction::perform($this->all());
        }catch (\Throwable $exception) {
            ReportException::report($exception);
            return [
                'status_code' => 422,
                'error'       => $exception->getMessage()
            ];
        }

    }
}
