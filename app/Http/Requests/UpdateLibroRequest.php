<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateLibroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación.
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'isbn' => [
                'required',
                'string',
                'max:20',
                Rule::unique('libros')->ignore($this->libro),
            ],
            'anio_publicacion' => 'required|integer|between:1500,' . date('Y'),
            'categoria_id' => 'required|exists:categorias,id',
        ];
    }

    /**
     * Mensajes personalizados.
     */
    public function messages(): array
    {
        return [
            'titulo.required' => 'El título es obligatorio.',
            'autor.required' => 'El autor es obligatorio.',
            'editorial.required' => 'La editorial es obligatoria.',
            'isbn.required' => 'El ISBN es obligatorio.',
            'isbn.unique' => 'Este ISBN ya está registrado.',
            'anio_publicacion.required' => 'El año es obligatorio.',
            'anio_publicacion.between' => 'El año no es válido.',
            'categoria_id.required' => 'Selecciona una categoría.',
        ];
    }
}