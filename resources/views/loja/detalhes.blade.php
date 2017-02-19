
@extends('loja.principal')

@section('conteudo')

@extends('loja.navegacao')
@if (count($errors) > 0)
  <div id="alert-msg" class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

@if(empty($p))
	<div class="section">
		<div class="container">
			<div class="row">
				<div class= "alert alert-danget">
					<h3>Produto não encontrado!</h3>
				</div>
			</div>
		</div>
	</div>


@else
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1><u>Produtos {{$p->nome}}</u></h1>
          <div class="form-group" >
              <label class="control-label" for="formInput180">Descrição do Produto</label>
              <input type="text" class="form-control" id="descricao" name="descricao" value="{{$p->descricao}}" disabled="disabled"/>
          </div>
          <div class="form-group" >
              <label class="control-label" for="formInput153">Quantidade</label>
              <input type="number" class="form-control" id="quantidade" name="quantidade"  value="{{$p->quantidade}}" disabled="disabled"/>
          </div>
          <div class="form-group" >
              <label class="control-label" for="formInput127">Valor</label>
              <input type="text" class="form-control" id="valor" name="valor" value="{{$p->valor}}" disabled="disabled"/>
          </div>
      </div>
    </div>
  </div>
</div>
@endif

@stop
