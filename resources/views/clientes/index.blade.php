@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Clientes <a href="clientes/create"><button class="btn btn-success">Novo</button></a></h3>
		@include('clientes.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nome</th>
                    <th>Email</th>
					<th>Tel. Celular</th>
                    <th>Tel. Fixo</th>
                    <th>Tel. Comercial</th>
				</thead>
               @foreach ($clientes as $cli)
				<tr>
                    <td>{{ $cli->idClientes}}</td>
					<td><a href="{{URL::action('ClientesController@show',$cli->idClientes)}}">{{ $cli->Nome}}</a></td>
					<td>{{ $cli->Email}}</td>
                    <td>{{ $cli->TelefoneCelular}}</td>
                    <td>{{ $cli->TelefoneFixo}}</td>
                    <td>{{ $cli->TelefoneComercial}}</td>
					<td>
						<a href="{{URL::action('ClientesController@edit',$cli->idClientes)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="#" data-target="#modal-delete-{{$cli->idClientes}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
						 
					</td>
				</tr>
				@include('clientes.modal')
				@endforeach
			</table>
		</div>
		{{$clientes->render()}}
	</div>
</div>
@stop