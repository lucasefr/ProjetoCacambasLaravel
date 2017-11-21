@extends('layouts.admin')
@section('conteudo')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Caçambas: {{ $cacambas->Numero }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($cacambas, ['method'=>'PATCH', 'route'=>['cacambas.update', $cacambas->idCacambas]])!!}
			{{Form::token()}}

            <div class="form-group">
            	<label for="Numero">Numero</label>
            	<input type="text" name="Numero" class="form-control" 
            	value="{{ $cacambas->Numero }}"
            	placeholder="Numero...">
            </div>
            
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@stop