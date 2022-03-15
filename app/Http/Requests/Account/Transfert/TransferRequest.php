<?php

namespace App\Http\Requests\Account\Transfert;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TransferRequest extends FormRequest
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
            "amount" => "required|numeric",
            "user_id" => "required|different:beneficiary_id",
            "beneficiary_id" => "required|different:user_id",
            "transfer_reason" => "required|string|max:191",
            "transfer_reference" => "required|string|max:191",
            "transfer_type" => "required",
            "transfer_date" => "required_if:transfer_type,1",
            "recurring_type" => "required_if:transfer_type,2",
            "recurring_start" => "required_if:transfer_type,2",
            "recurring_end" => "required_if:transfer_type,2",
        ];
    }
}
