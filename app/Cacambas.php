<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cacambas extends Model
{
    //
    protected $table = 'cacambas';
    protected $primaryKey = 'idCacambas';
    public $timestamps = false;
    protected $fillable = [
        'Numero'
    ];

    protected $guarded = [];
}
