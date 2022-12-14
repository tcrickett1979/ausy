<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'employee_name' => 'required',
            'employee_dept' => 'required',
            'plus_one' => 'required',
            'number_children' => 'required|numeric',
            'number_vegetarians' => 'required|numeric',
            'email' => 'required|email|unique:registrations,email',
        ];
    }
}
