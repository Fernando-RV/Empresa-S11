<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
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
            'cPerApellido' =>'required',
            'cPerNombre' =>'required',
            'cPerDireccion' =>'required',
            'cPerFecNac' =>'required',
            'nPerEdad' =>'required',
            'cPerSexo' =>'required',
            'nPerSueldo' =>'required',
            'cPerRnd' =>'required',
            //
        ];
    }

    public function messages(){
        return [
            'cPerApellido.required' =>'Se nesesita el dato Apellidos para una persona',
            'cPerNombre.required' =>'Se nesesita el dato Nombre para una persona',
            'cPerDireccion' =>'Se nesesita el dato Direccion para una persona',
            'cPerFecNac' =>'Se nesesita la Fecha de Nacimiento para una persona',
            'nPerEdad' =>'Se nesesita la Edad para una persona',
            'cPerSexo' =>'Se nesesita el Sexo para una persona',
            'nPerSueldo' =>'Se nesesita el sueldo para una persona',
            'cPerRnd' =>'Se nesesita el RND para una persona',
            //
        ];
    }

}