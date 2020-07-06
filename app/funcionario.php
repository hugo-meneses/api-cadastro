<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    protected $table = "funcionario";
    public $timestamps = false;
    
    const UPDATED_AT = null;
    const CREATED_AT = 'dtc_criacao';

    protected $fillable = [

        'nome', 'cidade', 'telefone', 'dt_nascimento', 'dtc_criacao',

    ];
}
