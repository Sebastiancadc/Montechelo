<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CapacitacionesRequest extends FormRequest
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
            'titulo' => 'required|min:5|max:35',
            'fecha' => 'required',
            'categoria' => 'required',
            'link' => 'required|max:200',
            'descripcion' => 'required|min:10|max:211',

        ];
    }

    public function messages()
    {
        return [
            'titulo.min' => 'El Titulo debe tener minimo 5 caracteres.',
            'titulo.max' => 'El Titulo debe tener maximo 35 caracteres.',
            'titulo.required' => 'El Titulo es requerido.',
            'fecha.required' => 'La Fecha es requerida.',
            'categoria.required' => 'La Categoria es requerida.',
            'link.max' => 'El Link debe tener maximo 200 caracteres.',
            'link.required' => 'El Link es requerido.',
            'descripcion.min' => 'La Descripcion debe tener minimo 10 caracteres.',
            'descripcion.max' => 'La Descripcion debe tener maximo 210 caracteres.',
            'descripcion.required' => 'La Descripcion es requerida.', 
        ];
    }
}
