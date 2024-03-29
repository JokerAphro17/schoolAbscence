<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSceanceCourRequest extends FormRequest
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
            'module_id'=> 'required',
            'classe_id' => 'required',
            'enseignant_id'=> 'required', 
            'duree'=> 'required',
            'date'=> 'required',  
        ];
    }
}
