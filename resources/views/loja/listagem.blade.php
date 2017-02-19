
@extends('loja.principal')

@section('conteudo')

@extends('loja.navegacao')

@if(empty($produtos))
	<div class="section">
		<div class="container">
			<div class="row">
				<div class= "alert alert-danger">
					Você não tem nenhum produto cadastrado
				</div>
			</div>
		</div>
	</div>


@else
	<div class="section">
		<div class="container">
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
				<div class="col-md-12">
					<h1><u>Listagem de Produtos</u></h1>
					<div class="table-responsive">
					<table id="example" class="table-responsive">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th class="hidden-md hidden-sm hidden-xs">Descrição</th>
								<th>Valor</th>
								<th>Quantidade</th>
								<th colspan="2">Ações</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($produtos as $p)
								<tr class = "{{ $p->quantidade <= 1 ? 'danger' : '' }}">
									<td>
										<a href="{{action('ProdutoController@alterar', $p->id)}}">
											{{$p->id }}
										</a>
									</td>
									<td> {{$p->nome}}</td>
									<td class="hidden-md hidden-sm hidden-xs"> {{$p->descricao}} </td>
									<td> {{$p->valor}} </td>
									<td> {{$p->quantidade}} </td>
									<td>
										<a href="{{action('ProdutoController@mostra', $p->id)}}">
											<span class="glyphicon glyphicon-search" arial-hidden="true"></span>
										</a>
									</td>
									<td>
										<a href="{{action('ProdutoController@remover', $p->id)}}">
											<span class="glyphicon glyphicon-trash" arial-hidden="true"></span>
										</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>
@endif


@stop
