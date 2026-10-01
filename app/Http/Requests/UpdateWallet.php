<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateWallet extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'    => 'sometimes|required|string|max:255',
            'number'  => 'sometimes|required|numeric|min:1',
            'balance' => 'sometimes|required|numeric|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'    => 'The name field is required.',
            'name.string'      => 'The name must be a valid string.',
            'name.max'         => 'The name may not be greater than 255 characters.',

            'number.required'  => 'The number field is required.',
            'number.numeric'   => 'The number must be a number.',
            'number.min'       => 'The number must be at least 1.',

            'balance.required' => 'The balance field is required.',
            'balance.numeric'  => 'The balance must be a number.',
            'balance.min'      => 'The balance cannot be negative.',
        ];
    }
}
