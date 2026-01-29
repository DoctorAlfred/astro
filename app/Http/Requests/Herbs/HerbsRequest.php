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
            'plantName' => ['sometimes', 'nullable', 'string'],
            'language' => ['sometimes', 'nullable', Rule::in(['it', 'en'])],
            'type' => ['sometimes', 'nullable', 'string'],
            'evidenceLevel' => ['sometimes', 'nullable', Rule::in(['high', 'medium', 'low', 'none'])],
            'sourceType' => ['sometimes', 'nullable', Rule::in(['scientific', 'traditional', 'religious', 'esoteric', 'folk', 'mixed'])],
        ];
    }

    /**
     * Custom messages
     */
    public function messages(): array
    {
        return [
             // IT
             'plantName.string' => 'Il nome della pianta deve essere una stringa valida',
             'language.in' => 'La lingua deve essere it oppure en',
             'type.string' => 'Il tipo di contenuto non è valido',
             'evidenceLevel.in' => 'Il livello di evidenza deve essere high, medium, low oppure none',
             'sourceType.in' => 'Il tipo di fonte non è valido',
        ];
    }
}
