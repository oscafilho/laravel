<?php

namespace loja\Http\Controllers;

use DB;
use Session;
use Request;
use Validator;
//use Illuminate\Support\Facedes\DB;

use loja\Http\Requests;
use loja\Http\Requests\ProdutoRequest;
use loja\Produto;
//use Auth;

class ProdutoController extends Controller
{
    public function __construct(){
        $this->middleware('autorizador');
    }

    public function lista()
    {
        $produtos = Produto::all();
        //$produtos = DB::select('select * from produtos');
        if(!empty($produtos)) {
            return view('loja.listagem')->withProdutos($produtos);
        } else {
            return view('loja.listagem')->withProdutos(array());
        }
    }

    public function novo()
    {
        return view('loja.formulario');
    }

    public function adiciona(ProdutoRequest $request)
    {

        if($this->validacao()->fails()){
            return redirect()->back()->withErrors($this->validacao());
        } else{
            Produto::create($request->all());
            Session::flash('flash_message', 'Adicionado com sucesso!');
            return redirect('/produtos')->withInput();
        }

    }

    public function mostra($id)
    {
        $produto = Produto::find($id);
        if(!empty($produto)){
            return view('loja.detalhes')->with('p', $produto);
        } else{
            return view('loja.detalhes')->with('p', array());
        }
    }

    public function alterar($id)
    {
        try {
            $produtos = Produto::find($id);
            if(empty($produtos)){
                Session::flash('flash_error', 'Produto não encontrado');
            }
            return view('loja.alterar')->with('p', $produtos);
        } catch(\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }

    }

    public function remover($id)
    {
      $produto = Produto::find($id);
      if(!empty($produto)){
          $produto->delete();
          Session::flash('flash_message', 'Exclusão realizada com sucesso!');
      } else {
          Session::flash('flash_error', 'Houve uma falha na exclusão');
      }
      return redirect()->action('ProdutoController@lista');
    }

    public function validacao()
    {
        $validator = Validator::make(
            [
                'nome' => Request::input('nome'),
                'descricao' => Request::input('descricao'),
                'valor' => Request::input('valor'),
                'quantidade' => Request::input('quantidade')
            ],[
                'nome' => 'required|min:5',
                'descricao' => 'required|max:255',
                'valor' => 'required|numeric',
                'quantidade' => 'required|numeric'
            ]
        );
       return $validator;
    }

    public function update($id)
    {
        if($this->validacao()->fails()){
            return redirect()->back()->withErrors($this->validacao());
        } else {
            $dados = [
                'nome' => Request::get('nome'),
                'descricao' => Request::get('descricao'),
                'valor' => Request::get('valor'),
                'quantidade' => Request::get('quantidade')
            ];
            Produto::whereId($id)->update($dados);
            return redirect('/produtos')->withInput();
        }
    }

}
