<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewProductRequest extends FormRequest {

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
            'nome_prodotto' => 'required|max:25',
            'catId' => 'required',
            'descrizione_breve' => 'required|max:30',
            'image' => 'image|max:1024',
            'prezzo' => 'required|numeric|min:0',
            'perc_sconto' => 'required|integer|min:0|max:100',
           
            'descrizione_estesa' => 'required|max:2500'
        ];
    }

}
