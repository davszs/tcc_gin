<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    // - mostra formulário de cadastro
    public function showRegisterForm()
    {
        return view('cadastro');
    }

    //cadastro e autenticação do novo usuário
    public function registerUser() 
    {
        
    }
}
