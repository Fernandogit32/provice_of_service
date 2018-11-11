<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvaliacaoRequest extends FormRequest
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
            'nota' => 'required|numeric|',
            'comentario' => 'required|',
           
        ];
    }

    function messages() {
        return [
            
            'nota.required' => 'Voce deve inserrir a nota para finalizar',
            'nota.numeric' => 'O valor da nota deve ser numérico',
            'comentario.required' => 'A descrição é obrigatória',
            
            
                          
        
        ];
        }
}
