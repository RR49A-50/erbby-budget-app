<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'role_id' => 'required|integer',
            'username' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'phone' => 'nullable|string|max:15',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'gender' => 'required|string|max:10',
        ];
    }
}
