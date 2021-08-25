<?php

namespace App\Http\Requests\Audience;

use App\Http\Action\Audience\UpdateAudienceAction;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAudienceRequest extends FormRequest
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
            'capacity'=>'required | integer',
            'name_aud'=>'required | integer'
        ];
    }
    public function perform()
    {
        try {
            return UpdateAudienceAction::perform($this->id,$this->all());
        } catch (\Throwable $exception) {
            ReportException::report($exception);
            return [
                'status_code' => 422,
                'error'       => $exception->getMessage()
            ];
        }
    }
}
