<?php

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
    return view('landing');
});

Route::get('login', function () {
    return view('login');
});

Route::get('cadastrar', function () {
    return view('cadastrar');
});
Route::get('admin', function () {
    return view('admin');
});
Route::get('recsenha', function () {
    return view('recsenha');
});
Route::get('cadastrarProdutor', function () {
    return view('cadastrarProdutor');
});
Route::get('recsenhaconfirm', function () {
    return view('recsenhaconfirm');
});
Route::get('perfilProdutor', function () {
    return view('perfilProdutor');
});
Route::post("/cadUsuario", "UsuarioController@cadUsuario");

Route::post("/cadProdutor", "ControllerProdutor@cadProdutor"); //Cria cadastro de Produtor no Banco de Dados.
