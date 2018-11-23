<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;

class DatesRequest extends FormRequest
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
            'name' => 'required|max:20',
            'lastname' => 'required|max:20',
            'document' => 'required|unique:user,document',
            /* 'email.unique' => 'Este email ya exite mi pana' */
            'genre' => 'required',
            'birthday' => 'required',
            'copyDocument' => 'required',
            'copyBirth' => 'required',
            'copyTitle' => 'required',
            'copyNotes' => 'required',
            'copyOpsu' => 'required',
            'copyBackground' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'lastname.required' =>'El apellido es obligatorio.',
            'document.required' => 'La cedula es muy importante.',
            'document.unique' => 'Este documento de identidad ya ha sido registrado.',
            'genre.required' => 'Seleccione su género.',
            'birthday.required' => 'Indique su fecha de nacimiento.',
            'copyDocument.required' => 'No puede dejar el campo de la Copia  de la Cedula vacio.',
            'copyBirth.required' => 'No puede dejar el campo de la Partida de nacimiento vacio.',
            'copyTitle.required' => 'No puede dejar el campo de la Copia del Titulo de Bachiller vacio.',
            'copyNotes.required' => 'No puede dejar el campo de las Notas Certificadas vacio.',
            'copyOpsu.required' => 'No puede dejar el campo de la original de la OPSU vacio.',
            'copyBackground.required' => 'No puede dejar el campo del Fondo Negro vacio.',
        ];
    }
}
