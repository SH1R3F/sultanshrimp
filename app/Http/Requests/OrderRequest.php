<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'branch' => ['required', 'string'],
            'resources' => ['required', 'array'],
            'resources.*' => ['required', 'array'],
            'resources.*.amount' => ['required', 'numeric'],
            'resources.*.existing' => ['required', 'numeric'],
            'resources.*.resource' => ['required', 'string'],
        ];
    }
}
