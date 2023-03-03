<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Usuario;
use App\Http\Controllers\Web\UsuarioGrupo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario/listar', [Usuario\Listar::class, 'view']);

Route::get('/usuarioGrupo/listar', [UsuarioGrupo\Listar::class, 'view']);
