<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //
    protected $table = 'clientes';
    protected $primaryKey = 'idClientes';
    public $timestamps = false;
    protected $fillable = [
        'Nome',
        'TipoCliente',
        'CnpjCpf',
        'Email',
        'TelefoneFixo',
        'TelefoneComercial',
        'TelefoneCelular',
        'Endereco',
        'Numero',
        'Bairro',
        'Cidade', 
        'UF',
        'Complemento',
        'cep',
        'DataCadastro' 
    ];

    protected $guarded = [];
}

