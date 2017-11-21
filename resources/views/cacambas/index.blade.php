@extends ('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Caçambas <a href="cacambas/create"><button class="btn btn-success">Novo</button></a></h3>
		@include('cacambas.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nome</th>
					
					<th>Opções</th>
				</thead>
               @foreach ($cacambas as $cac)
				<tr>
					<td>{{ $cac->idCacambas}}</td>
					<td>{{ $cac->Numero}}</td>
					
					<td>
						<a href="{{URL::action('CacambasController@edit',$cac->idCacambas)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$cac->idCacambas}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
						 <a href="#" data-target="#" data-toggle="modal"><button class="btn btn-secondary">Localização</button></a>
					</td>
				</tr>
				@include('cacambas.modal')
				@endforeach
			</table>
		</div>
		{{$cacambas->render()}}
	</div>
</div>
@stop