<?php

namespace App\Http\Requests\Group;

use App\Http\Action\Group\UpdateGroupAction;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGroupRequest extends FormRequest
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
            'name_group'=>'required | integer'
        ];
    }
    public function perform()
    {
        try {
            return UpdateGroupAction::perform($this->id,$this->all());
        } catch (\Throwable $exception) {
            ReportException::report($exception);
            return [
                'status_code' => 422,
                'error'       => $exception->getMessage()
            ];
        }
    }
}
