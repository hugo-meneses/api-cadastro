<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Helpers\helpers;
use App\Models\cadastro;
use App\Models\funcionario;
use App\Models\posto;

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
