@extends('layouts.admin')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		
	</div>
</div>				

<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Cliente: {{ $clientes->Nome }}</h3>
			
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			

            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<label for="nome">Nome:</label>
            	<label for="nome">{{ $clientes->Nome }}</label>
            </div>

			<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<label for="nome">CNPJ/CPF:</label>
            	<label for="nome">{{ $clientes->CnpjCpf }}</label>
            </div>

			<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<label for="nome">Email:</label>
            	<label for="nome">{{ $clientes->Email }}</label>
            </div>

			<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<label for="nome">Tel Fixo:</label>
            	<label for="nome">{{ $clientes->TelefoneFixo }}</label>
            </div>

			<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<label for="nome">Tel Comercial:</label>
            	<label for="nome">{{ $clientes->TelefoneComercial }}</label>
            </div>

			<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<label for="nome">Tel Celular:</label>
            	<label for="nome">{{ $clientes->TelefoneCelular }}</label>
            </div>

			<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<label for="nome">Rua:</label>
            	<label for="nome">{{ $clientes->Endereco }}</label>
            </div>

			<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<label for="nome">Numero:</label>
            	<label for="nome">{{ $clientes->Numero }}</label>
            </div>

			<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<label for="nome">Bairro:</label>
            	<label for="nome">{{ $clientes->Bairro }}</label>
            </div>

			<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<label for="nome">Cidade:</label>
            	<label for="nome">{{ $clientes->Cidade }}</label>
            </div>

			<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<label for="nome">UF:</label>
            	<label for="nome">{{ $clientes->UF }}</label>
            </div>

			<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<label for="nome">Complemento:</label>
            	<label for="nome">{{ $clientes->Complemento }}</label>
            </div>
			
			<div class="form-group">
				<a href="{{URL::action('ClientesController@edit',$clientes->idClientes)}}"><button class="btn btn-info">Editar</button></a>            
				
            </div>

			
            
		</div>
	</div>
@stop