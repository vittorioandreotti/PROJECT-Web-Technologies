<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditProductRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'nome' => 'required|max:60',
            'prezzo' => 'required|numeric|min:0',
            'sconto' =>'required',
            'percSconto' => 'required|integer|min:0|max:100',
            'descCorta' => 'required|max:40',
            'descLunga' => 'required|max : 5000'
            
        ];
    }

    

}