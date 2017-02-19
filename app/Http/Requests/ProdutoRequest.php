<?php

namespace loja\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'          => 'required|min:3',
            'descricao'     => 'required|min:3|max:100',
            'valor'         => 'required|numeric',
            'quantidade'    => 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'required'  => 'O :attribute é obrigatório',
            'min'       => 'O :attribute deve no minimo :min caracteres',
            'numeric'   => 'Este valor em :attribute não é numérico'
        ];
    }
}
