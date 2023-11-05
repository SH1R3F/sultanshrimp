<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                Rule::when(request()->isMethod('POST'), Rule::unique('users'), Rule::unique('users')->ignore($this->user))
            ],
            'password' => [
                Rule::when(request()->isMethod('POST'), 'required', 'nullable'),
                'string',
                'min:6',
            ]
        ];
    }
}
