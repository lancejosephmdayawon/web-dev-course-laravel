<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registrationRequest extends FormRequest
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
            'emailAddress' => ['required', 'email', 'min:10', 'max:50', 'ends_with:@iskolarngbayan.pup.edu.ph'],
            'firstName' => ['required', 'min:1'],
            'middleName' => ['nullable', 'string', 'min:1', 'max:4', 'ends_with:.'],
            'lastName' => 'required|string|max:50',
            'date' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'emailAddress.max' => 'Sobra!',
            'emailAddress.ends_with' => 'Dapat sakto sa format! @iskolarngbayan!'
        ];
    }
}
