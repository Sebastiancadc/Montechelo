<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NovedadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'area' => 'required',
            'fecha' => 'required',
            'novedad' => 'required|min:5|max:30',
            'descripcion' => 'required|min:1|max:230',
        ];
    }
    public function messages()
    {
        return [
            'area.required' => 'El Area es requerida.',
            'fecha.required' => 'La Fecha es requerida.',
            'novedad.min' => 'La Novedad debe tener minimo 5 caracteres.',
            'novedad.max' => 'La Novedad debe tener maximo 30 caracteres.',
            'novedad.required' => 'La Novedad es requerida.',
            'descripcion.min' => 'La Descripcion debe tener minimo 1 caracteres.',
            'descripcion.max' => 'La Descripcion debe tener maximo 230 caracteres.',
            'descripcion.required' => 'La Descripcion es requerida.',
        ];
    }
}
