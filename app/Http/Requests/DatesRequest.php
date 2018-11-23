<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'document' => 'required',
            'genre' => 'required',
            'birthday' => 'required',
            'copyDocument' => 'required',
            'copyBirth' => 'required',
            'copyTitle' => 'required',
            'copyNotes' => 'required',
            'copyOpsu' => 'required',
            'copyBackground' => 'required',
        ];
    }
}
