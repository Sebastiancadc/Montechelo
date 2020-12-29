<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuzonRequest extends FormRequest
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

            'tipo_sugerencia' => 'required',
            'descripcion' => 'required|min:5|max:200',
            'area' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'tipo_sugerencia.required' => 'El Titulo es requerido.',
            'descripcion.min' => 'La Descripcion debe tener minimo 5 caracteres.',
            'descripcion.max' => 'La Descripcion debe tener maximo 200 caracteres.',
            'descripcion.required' => 'La Descripcion es requerida.',
            'area.required' => 'El Area es requerida.',
            
        ];
    }
}
