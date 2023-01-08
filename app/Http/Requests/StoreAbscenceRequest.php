<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAbscenceRequest extends FormRequest
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
            'eleve_id'=> 'required|unique:absences,eleve_id',
            'sceance_cour_id' => 'required|unique:absences,sceance_cour_id',
            'motif' =>'required',
        ];
    }
}
