<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitudRequest extends FormRequest
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
            'nombre' => 'required|min:3|max:10',
            'apellido' => 'required|min:4|max:11',
            'tipo_solicitud' => 'required',
            'cedula' => 'required|min:1|max:10',
            'telefono' => 'required|min:1|max:10',
            'area_trabajo' => 'required',
            'fecha' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nombre.min' => 'El Nombre debe tener minimo 3 caracteres.',
            'nombre.max' => 'El Nombre debe tener maximo 10 caracteres.',
            'nombre.required' => 'El Nombre es requerido.',
            'apellido.min' => 'El Apellido debe tener minimo 4 caracteres.',
            'apellido.max' => 'El Apellido debe tener maximo 11 caracteres.',
            'apellido.required' => 'El Apellido es requerido.',
            'tipo_solicitud.required' => 'El Tipo de solicitud es requerido.',
            'cedula.min' => 'El Documento debe tener minimo 1 caracter.',
            'cedula.max' => 'El Documento debe tener maximo 10 caracteres.',
            'cedula.required' => 'El Documento es requerido.',
            'telefono.min' => 'El Teléfono debe tener minimo 1 caracter.',
            'telefono.max' => 'El Teléfono debe tener maximo 10 caracteres.',
            'telefono.required' => 'El Teléfono es requerido.',
            'area_trabajo.required' => 'El Área de trabajo es requerida.',
            'fecha.required' => 'La Fecha es requerida.',
        ];
    }
}
