<?php

namespace App\Http\Requests\Stones;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StonesRequest extends FormRequest
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
            'birth_date'     => ['required', 'date_format:d-m-Y'], // es: 20-03-1978
            'reference_date' => ['required', 'date_format:d-m-Y'], // es: 23-11-2025
            'language' => ['nullable', 'string', 'in:it,it-IT,en,en-US'],
        ];
    }

    /**
     * Messages function
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'birth_date.required'        => 'La data di nascita è obbligatoria.',
            'birth_date.date_format'     => 'La data di nascita deve essere nel formato gg-mm-aaaa.',
            'reference_date.required'    => 'La data di riferimento è obbligatoria.',
            'reference_date.date_format' => 'La data di riferimento deve essere nel formato gg-mm-aaaa.',
        ];
    }

    /**
     * Failed Validation function
     *
     * @param Validator $validator
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422)
        );
    }
}
