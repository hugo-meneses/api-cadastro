<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    protected $fillable = [
        'nome', 'cidade', 'telefone',
    ];
}
