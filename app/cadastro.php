<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cadastro extends Model
{
    protected $table = "cadastro";
    public $timestamps = false;
    
    const UPDATED_AT = null;
    const CREATED_AT = 'dtc_criacao';

    protected $fillable = [

        'nome', 'posto', 'pais', 'dtc_criacao',

    ];
}
