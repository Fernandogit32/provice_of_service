<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'telefone' => 'required|min:14|max:14|',
            'celular' => 'required|min:15|max:15|',
            'cep' => 'required|min:8|max:8|',
            'cidade' => 'required|',
            'bairro' => 'required|',
            'rua' => 'required|',
            'numero' => 'required|numeric|',
        ];
    }

    function messages() {
        return [
            
            'telefone.required' => 'O campo Telefone é obrigatório',
            'telefone.max' => 'O campo Telefone deve ter 10 digitos',
            'telefone.min' => 'O campo Telefone deve ter 10 digitos',
            'celular.required' => 'O campo Celular é obrigatório',
            'celular.max' => 'O campo Celular deve ter 11 digitos',
            'celular.min' => 'O campo Celular deve ter 11 digitos',
            'cep.required' => 'O campo Cep é obrigatório',
            'cep.max' => 'O campo Cep deve ter 8 digitos',
            'cep.min' => 'O campo Cep deve ter 8 digitos',
            'cidade.required' => 'O campo Cidade é obrigatório',
            'bairro.required' => 'O campo Bairro é obrigatório',
            'rua.required' => 'O campo Rua é obrigatório',
            'numero.required' => 'O campo Número é obrigatório',               
        
        ];
        }

}
