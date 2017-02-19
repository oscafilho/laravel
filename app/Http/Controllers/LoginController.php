<?php

namespace loja\Http\Controllers;

use Request;

use loja\Http\Requests;
use loja\Http\Requests\LoginRequest;
use Auth;

class LoginController extends Controller
{
  public function __construct()
  {
    $this->middleware('autorizador');
  }

  public function form(){
    Auth::logout();
    return view('loja.form_login');
  }

  public function login(LoginRequest $request){
    $credenciais = Request::only('email', 'password');
    if(Auth::attempt($credenciais)){
      return redirect()->action('ProdutoController@lista');
    }

    return view('loja.form_login');
  }

  public function logout(){
    Auth::logout();
    return view('loja.form_login');
  }
}
