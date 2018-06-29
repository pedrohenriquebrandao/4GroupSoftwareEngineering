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
    return view('home');
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
Route::get('recuperar-senha', function () {
    return view('recuperar-senha');
});
Route::get('cadastrar-produtor', function () {
    return view('cadastrar-produtor');
});

Route::get('recsenhaconfirm', function () {
    return view('recsenhaconfirm');
});
Route::get('perfil-produtor', function () {
    return view('perfil-produtor');
});
Route::get('carrinho', function () {
    return view('carrinho');
});
Route::get('dashboard-produtor', function () {
    return view('dashboard-produtor');
});

Route::get('tables', function () {
    return view('tables');
});
Route::get('forms', function () {
    return view('forms');
}); 
Route::get('pagamento', function () {
    return view('pagamento');
});
Route::get('assinaturas-ativas-pendentes', function () {
    return view('assinaturas-ativas-pendentes');
});
Route::get('gerenciar-produtos', function () {
    return view('gerenciar-produtos');
});
Route::get('navbarprodutor', function () {
    return view('navbarprodutor');
});
Route::get('adicionar-produtos', function () {
    return view('adicionar-produtos');
});
Route::get('assinaturas-pausadas', function () {
    return view('assinaturas-pausadas');
});

Route::get('cadastrar-admin', function () {
    return view('cadastrar-admin');
});

Route::get('comentarios-produtor', function () {
    return view('comentarios-produtor');
});

Route::get('pausar-assinatura', function () {
    return view('pausar-assinatura');
});

Route::get('avaliacoes-produtor', function () {
    return view('avaliacoes-produtor');
});

Route::get('criar-promocao', function () {
    return view('criar-promocao');
});
Route::get('editar-produto', function () {
    return view('editar-produto');
});
Route::get('detalhe-assinatura', function () {
    return view('detalhe-assinatura');
});

Route::post("/cadUsuario", "ControllerUsuario@cadUsuario");

Route::post("/cadAdmin", "ControllerAdmin@cadAdmin");

Route::post("/cadProdutor", "ControllerProdutor@cadProdutor"); //Cria cadastro de Produtor no Banco de Dados.

Route::get('/usuarios', 'ControllerUsuario@index');

Route::get('/admins', 'ControllerUsuario@index');
