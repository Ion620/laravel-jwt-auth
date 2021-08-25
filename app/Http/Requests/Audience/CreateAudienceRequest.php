<?php

namespace App\Http\Requests\Audience;

use App\Http\Action\Audience\CreateAudienceAction;
use Illuminate\Foundation\Http\FormRequest;

class CreateAudienceRequest extends FormRequest
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
            'capacity'=>'required | integer',
            'name_aud'=>'required | integer'
        ];
    }
    public function perform(){
        try {
            return CreateAudienceAction::perform($this->all());
        }catch (\Throwable $exception) {
            ReportException::report($exception);
            return [
                'status_code' => 422,
                'error'       => $exception->getMessage()
            ];
        }

    }
}
