<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEleveRequest extends FormRequest
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
            'ine' => 'required|unique:eleves,ine',
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'date_naissance' => 'required',
            'lieu_naissance' => 'required',
            'classe_id' => 'required',
        ];
    }
}
