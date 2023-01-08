<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEleveRequest extends FormRequest
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
            'ine'=> 'required|unique:eleves,ine,'. $this->route('eleve')->id,
            'nom'=> 'required,'. $this->route('eleve')->id,
            'prenom' => 'required,'. $this->route('eleve')->id,
            'sexe' =>'required,'. $this->route('eleve')->id,
            'date_naissance' => 'required,'. $this->route('eleve')->id,
            'lieu_naissaance' => 'required,'. $this->route('eleve')->id,
            'class_id' => 'required,'. $this->route('eleve')->id,
        ];
    }
}
