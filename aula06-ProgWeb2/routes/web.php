<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\Controlador@index');

Route::get('/formFuncionario', 'App\Http\Controllers\Controlador@formFuncionario');
Route::post('/formFuncionario', 'App\Http\Controllers\Controlador@preencheFuncionario' ) -> name ('formularioFuncionario');

//direciona depois de preencher formulário
Route::post('/formSetor', 'App\Http\Controllers\Controlador@preencheSetor' ) -> name ('formularioSetor');

//abre o formulario para preencher setor
Route::get('/formSetor', 'App\Http\Controllers\Controlador@formSetor' );

Route::get('/lsSetor', 'App\Http\Controllers\Controlador@lsSetor');

Route::get('/lsFuncionario', 'App\Http\Controllers\Controlador@lsFuncionario');
