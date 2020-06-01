<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditDataRequest extends FormRequest {

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
            'nome' => 'required|max:255',
            'cognome' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|min:8',
            'username' => 'required|min:8',
            'via' => 'required|max:255',
            'citta' => 'required|max:100',
            'cap' => 'required|max:20',
            'stato' => 'required|max:50',
            'dataNascita' => 'required|max:255',
            'occupazione' => 'required|max:255',
        ];
    }

}
