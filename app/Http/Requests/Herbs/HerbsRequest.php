<?php

namespace App\Http\Requests\Herbs;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class HerbsRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'min:2',
                'max:100',
            ],

            'language' => [
                'sometimes',
                'nullable',
                Rule::in(['it', 'en']),
            ],
        ];
    }

    /**
     * Custom messages
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Il nome della pianta è obbligatorio.',
            'language.regex' => 'Il formato lingua deve essere it, en, ecc.',
        ];
    }
}
