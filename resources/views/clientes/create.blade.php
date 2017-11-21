@extends('layouts.admin')
@section('conteudo')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3>Novo Cliente</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
        @endif

        {!!Form::open(array('url'=>'clientes','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <label for="Nome">Nome</label>
            <input type="text" name="Nome" class="form-control" placeholder="Nome...">
        </div>
        <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <label for="TipoCliente">Tipo de Cliente</label><br>
            <input type="radio" value="0" name="TipoCliente" class="">CNPJ<br>
            <input type="radio" value="1" name="TipoCliente" class="">CPF<br>
        </div>
        <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <label for="CnpjCpf">Cnpj/Cpf</label>
            <input type="text" name="CnpjCpf" class="form-control" placeholder="Senha...">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <label for="Email">Email</label>
            <input type="email" name="Email" class="form-control" placeholder="Senha...">
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <label for="TelefoneFixo">Telefone Fixo</label>
            <input type="text" name="TelefoneFixo" class="form-control" placeholder="Senha...">
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <label for="TelefoneComercial">Telefone Comercial</label>
            <input type="text" name="TelefoneComercial" class="form-control" placeholder="Senha...">
        </div>
        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <label for="TelefoneCelular">Telefone Celular</label>
            <input type="text" name="TelefoneCelular" class="form-control" placeholder="Senha...">
        </div>
       <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <label for="Endereco">Rua</label>
            <input type="text" name="Endereco" class="form-control" placeholder="Senha...">
        </div>
        <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <label for="Numero">Numero</label>
            <input type="text" name="Numero" class="form-control" placeholder="Senha...">
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label for="Complemento">Complemento</label>
            <input type="text" name="Complemento" class="form-control" placeholder="Senha...">
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <label for="Bairro">Bairro</label>
            <input type="text" name="Bairro" class="form-control" placeholder="Senha...">
        </div>
        <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
            <label for="Cidade">Cidade</label>
            <input type="text" name="Cidade" class="form-control" placeholder="Senha...">
        </div>
        
        
        <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <label for="UF">UF</label>
            <input type="text" name="UF" class="form-control" placeholder="Senha...">
        </div>
        <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
            <label for="cep">CEP</label>
            <input type="text" name="cep" class="form-control" placeholder="Senha...">
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button class="btn btn-primary" type="submit">Salvar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>

        {!!Form::close()!!}		
        
    </div>
</div>
@stop
