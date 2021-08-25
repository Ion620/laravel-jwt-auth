<?php

namespace App\Http\Requests\Group;

use App\Helpers\ReportException;
use App\Http\Action\Group\CreateGroupAction;
use App\Repositories\GroupRepository;
use Illuminate\Foundation\Http\FormRequest;

class CreateGroupRequest extends FormRequest
{
    public $group_id;
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

            return CreateGroupAction::perform($this->all());
        } catch (\Throwable $exception) {
            ReportException::report($exception);
            return [
                'status_code' => 422,
                'error'       => $exception->getMessage()
            ];
        }
    }
}
