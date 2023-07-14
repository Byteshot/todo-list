<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class PersonajeRequest extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'required|int',
            'name' => 'required|string',
            'image' => 'required|string',
            'status' => 'required|string',
            'species' => 'required|string',
            'url' => 'required|string'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'id.required' => 'El nombre es necesario.',
            'name.string' => 'El nombre no es valido.',
            'image.required' => 'El hexadecimal es necesario.',
            'status.string' => 'El hexadecimal no es valido.',
            'species.string' => 'El nombre no es valido.',
            'url.string' => 'El nombre no es valido.',
        ];
    }
}
