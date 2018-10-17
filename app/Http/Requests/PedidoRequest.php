<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PedidoRequest extends FormRequest
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
            'descricao' => 'required|min:10|max:255|',
            'id_autonomo' => 'required|numeric|',
        ];

    }
    function messages() {
        return [
            
            'descricao.required' => 'O campo descrição é obrigatorio',
            'descricao.max' => 'Limite de caracteres foi excedido o limite é 255 caracteres',
            'descricao.min' => 'Sua descrição deve ter no minimo 10 caracter',            
        
        ];
        }
}
