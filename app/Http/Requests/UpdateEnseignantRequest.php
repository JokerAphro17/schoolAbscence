<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEnseignantRequest extends FormRequest
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
            'nom'=> 'required,'. $this->route('enseignant')->id,
            'prenom' => 'required,'. $this->route('enseignant')->id,
            'email'=> 'required|unique:enseignants,ine,'. $this->route('enseignant')->id,
            'telephone'=> 'required|unique:enseignant,telephone,'. $this->route('enseignant')->id, 
        ];
    }
}
