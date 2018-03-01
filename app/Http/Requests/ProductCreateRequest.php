<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
     * Determinar reglas que se ejecutaran para los datos
     *
     * @return array
     */
    public function rules()
    {
        return [
        'name' => 'required|min:3',
        'description' => 'required|max:200',
        'price' => 'required|numeric'
        ];
    }


    /*
    *  Determinar mensaje de error en validaciones 
    *
    */

    public function message(){

        return [
          'name.required' => 'El :attribute es obligatorio',
          'name.min' => 'El :attribute debe tener más de 3 caracteres',
          'description.required' => 'La :attribute es obligatoria',
          'description.max' => 'La :attribute debe tener un máximo de 200 caracteres',
          'price.required' => 'El :attribute es obligatorio',
          'price.numeric' => 'El :attribute debe ser númerico'
        ];
    }

    /* Personalizar nombre de atributos */

    public function attributes(){

        return [

            'name' => 'Nombre del Producto',
            'price' => 'Precio del Producto',
            'description' => 'Descripción Corta del Producto',
            'price' => 'Precio del Producto'
        ];
    }
}
