
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

    <div class="row">
      <div class="col-md-6">
        <h1><u>Novos Produtos</u></h1>
        <form role="form" action="{{action('ProdutoController@adiciona')}}" method="post" accept-charset="utf-8">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group" >
              <label class="control-label" for="formInput180">Nome do Produto</label>
              <input type="text" class="form-control" id="nome" name="nome"/>
          </div>
          <div class="form-group" >
              <label class="control-label" for="formInput180">Descrição do Produto</label>
              <input type="text" class="form-control" id="descricao" name="descricao"/>
          </div>
          <div class="form-group" >
              <label class="control-label" for="formInput153">Quantidade</label>
              <input type="number" class="form-control" id="quantidade" name="quantidade"/>
          </div>
          <div class="form-group" >
              <label class="control-label" for="formInput127">Valor</label>
              <input type="text" class="form-control" id="valor" name="valor"/>
          </div>

          <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
      </div>
    </div>
  </div>
</div>

@stop
