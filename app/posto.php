<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posto extends Model
{
    protected $table = "posto";
    public $timestamps = false;
    
    const UPDATED_AT = null;
    const CREATED_AT = 'dtc_criacao';

    protected $fillable = [

        'nome_posto','tipo_posto' ,'dtc_criacao',

    ];
}
