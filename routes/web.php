<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal']);

route::get('/usuarios/cadastrar',[UsuariosController::class,'showRegisterForm']);
route::post('/usuarios', [UsuariosController::class]);

    // route::post(
    //     '/login', 
    //     [LoginController::class]);
    
// route::get('/rec_senha', function() {
//     echo "recuperar senha";
// });

// route::get('/painel_controle', function() {
//     echo "painel de controle";
// });

// route::get('/funcionarios', function() {
//     echo "funcionarios";
// });

// route::get('/planejamento_aulas', function() {
//     echo "planejamento de aulas";
// });

// route::get('/config_geral', function() {
//     echo "configurações gerais";
// });
