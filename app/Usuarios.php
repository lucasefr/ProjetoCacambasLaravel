<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //
    protected $table = 'usuarios';
    protected $primaryKey = 'idUsuarios';
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'senha',
        'email'
    ];

    protected $guarded = [];
}
