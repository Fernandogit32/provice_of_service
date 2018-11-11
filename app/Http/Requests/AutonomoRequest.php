<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutonomoRequest extends FormRequest
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
            'profissao' => 'required|',
            'descricao' => 'required|',
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
            'profissao.required' => 'O campo profissão é obrigatório',              
            'descricao.required' => 'O campo descrição é obrigatório',              
        
        ];
        }

}
