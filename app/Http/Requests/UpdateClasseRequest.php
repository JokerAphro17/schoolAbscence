<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClasseRequest extends FormRequest
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
            'filiere_id'=> 'required|unique:classes,filiere_id,'. $this->route('classe')->id,
            'nom'=> 'required|unique:classes,nom,'. $this->route('classe')->id,
        ];
    }
}
