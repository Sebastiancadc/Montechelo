<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalendarioRequest extends FormRequest
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
            'name' => 'required|min:4|max:20',
            'start_time' => 'required',
            'end_time' => 'required',
            'className' => 'required',
            'description' => 'required|min:10|max:200',   
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El Titulo es requerido.',
            'name.min' => 'El Titulo debe tener minimo 4 caracteres.',
            'name.max' => 'El Titulo debe tener maximo 20 caracteres.',
            'start_time.required' => 'La Fecha inicial es requerida.',
            'end_time.required' => 'La Fecha final es requerida.',
            'className.required' => 'El Tipo es requerido.',
            'description.required' => 'La Descripcion es requerida.',
            'description.min' => 'La Descripcion debe tener minimo 10 caracteres.',
            'description.max' => 'La Descripcion debe tener maxinmo 200 caracteres.',
        ];
    }
}
