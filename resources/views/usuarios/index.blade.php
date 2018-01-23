@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Usuarios <a href="usuarios/create"><button class="btn btn-success">Novo</button></a></h3>
		@include('usuarios.search')
	</div>
</div>

<div class="row" onload="teste()">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nome</th>
                    <th>Email</th>
					
					<th>Opções</th>
				</thead>
               @foreach ($usuarios as $users)
				<tr>
					<td>{{ $users->id}}</td>
					<td>{{ $users->name}}</td>
					<td>{{ $users->email}}</td>
					<td id="salvar">
						<a href="{{URL::action('UsuariosController@edit',$users->id)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="#" data-target="#modal-delete-{{$users->id}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
						 
					</td>
				</tr>
				@include('usuarios.modal')
				@endforeach
			</table>
		</div>
		{{$usuarios->render()}}
	</div>
</div>
@push('scripts')

<script>

function ocultar(){
      if($user->id==$usuarios->id){
            $("#salvar").hide();
      } else{
            $("#salvar").show();
      }
}

function teste(){
	alert('My Balls');
	console.log($usuarios.id);
}


console.log($user->id);

</script>

@endpush
@stop