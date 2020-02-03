<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cadastroController extends Controller
{
    public function store(Request $request)
    {    
        Cadastro::create([
            'nome' => request('nome'),
            'posto' => request('posto'),
            'pais' => request('pais'),
            'id' => auth()->id()
        ]);  
    }
}
