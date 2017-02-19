
@extends('loja.principal')

@section('conteudo')

@extends('loja.navegacao')

<div class="section">
  <div class="container">
    @if (count($errors) > 0)
      <div id="alert-msg" class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if(Session::has('flash_message'))
        <div id="alert-msg" class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @elseif (Session::has('flash_error'))
      <div id="alert-msg" class="alert alert-danger">
          {{ Session::get('flash_error') }}
      </div>
    @endif
    <div class="row">
      <div class="col-md-6">
        <h1><u>Alterar Produtos</u></h1>
        <form role="form" action="{{action('ProdutoController@update', $p->id)}}" method="post" accept-charset="utf-8">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="id" value="{{$p->id}}">
          <div class="form-group" >
              <label class="control-label" for="formInput180">Nome do Produto</label>
              <input type="text" class="form-control" id="nome" name="nome" value="{{$p->nome}}"/>
          </div>
          <div class="form-group" >
              <label class="control-label" for="formInput180">Descrição do Produto</label>
              <input type="text" class="form-control" id="descricao" name="descricao" value="{{$p->descricao}}"/>
          </div>
          <div class="form-group" >
              <label class="control-label" for="formInput153">Quantidade</label>
              <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{$p->quantidade}}"/>
          </div>
          <div class="form-group" >
              <label class="control-label" for="formInput127">Valor</label>
              <input type="text" class="form-control" id="valor" name="valor" value="{{$p->valor}}"/>
          </div>

          <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
      </div>
    </div>
  </div>
</div>

@stop
