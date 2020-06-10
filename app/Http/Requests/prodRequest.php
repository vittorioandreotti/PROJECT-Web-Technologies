<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

// Aggiunti per response JSON
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;

class prodRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        //Visto che l'autorizzazione è gestita ad un altro livello, qua autorizziamo sempre
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
            'codCat' => 'required',
            'descCorta' => 'required|max:500',
            'image' => 'image|max:1024',
            'prezzo' => 'required|numeric|min:0',
            'percSconto' => 'required|integer|min:0|max:100',
            'sconto' => 'required',
            'descLunga' => 'required|max:5000'
        ];
    }
    /**
     * Override: response in formato JSON
    */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }

}
