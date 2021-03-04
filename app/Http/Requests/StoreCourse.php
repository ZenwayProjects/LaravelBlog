<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourse extends FormRequest
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
            
            'name'=>'required|max:15',
            'description'=>'required|min:10',
            'category'=>'required'
            
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'Debes ingresar una descripción',
            'description.min' => 'La descripcion debe tener al menos 10 caracteres',
        ];
    }
}
