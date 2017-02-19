<?php

namespace loja\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
  public function authorize()
  {
      return true;
  }

  public function rules()
  {
      return [
          'email'        => 'required|email',
          'password'     => 'required|min:6'
      ];
  }

  public function messages(){
      return [
          'required' => 'O :attribute é obrigatorio',
          'min'=> 'O :attribute deve no minimo :min caracteres'
      ];
  }    
}
