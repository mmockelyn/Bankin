<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'civility' => ['required'],
            'birthname' => ['required'],
            'name' => ['required'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'fiscal_country' => ['required'],
            'address' => ['required', 'string'],
            'postal' => ['required', 'string', 'max:5'],
            'city' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'birthdate' => ['required', 'string', 'date'],
            'country_birth' => ['required', 'string'],
            'city_birth' => ['required', 'string'],
            'nationality' => ['required', 'string'],
            'pro_activity' => ['required'],
            'activity_domain' => ['exclude_unless:pro_activity, false'],
            'activity_profession' => ['exclude_unless:pro_activity, false'],
            'revenue' => ['required'],
            'patrimoine_immobilier' => ['required'],
            'patrimoine_financier' => ['required'],
            'plan' => ['required'],
            'credit_type' => ['required'],
            'accept_document' => ['required'],
            'otp_code' => ['required'],
            'justify_identity' => ['required', 'file'],
            'justify_address' => ['required', 'file'],
            'justify_income' => ['required', 'file'],
            'justify_signate' => ['required', 'file'],
            'justify_rib' => ['required', 'file'],
        ];
    }
}
