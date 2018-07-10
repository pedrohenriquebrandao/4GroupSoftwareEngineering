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
    return view('auth.login');
});

Route::get('cadastrar', function () {
    return view('auth.cadastrar');
});
Route::get('admin', function () {
    return view('admin');
});
Route::get('recuperar-senha', function () {
    return view('auth.recuperar-senha');
});
Route::get('cadastrar-produtor', function () {
    return view('auth.cadastrar-produtor');
});

Route::get('recsenhaconfirm', function () {
    return view('auth.recsenhaconfirm');
});
Route::get('perfil-produtor', function () {
    return view('perfil-produtor');
});
Route::get('carrinho', function () {
    return view('usuario.carrinho');
});
Route::get('dashboard-produtor', function () {
    return view('produtor.dashboard-produtor');
});
Route::get('tables', function () {
    return view('tables');
});
Route::get('forms', function () {
    return view('forms');
}); 
Route::get('pagamento', function () {
    return view('usuario.pagamento');
});
Route::get('assinaturas-ativas-pendentes', function () {
    return view('produtor.assinaturas-ativas-pendentes');
});
Route::get('gerenciar-produtos', function () {
    return view('produtor.gerenciar-produtos');
});
Route::get('navbarprodutor', function () {
    return view('navbarprodutor');
});

Route::get('adicionar-produtos', function () {
    return view('produtor.adicionar-produtos');
});
Route::get('assinaturas-pausadas', function () {
    return view('assinaturas-pausadas');
});

Route::get('cadastrar-admin', function () {
    return view('auth.cadastrar-admin');
});

Route::get('comentarios-produtor', function () {
    return view('produtor.comentarios-produtor');
});

Route::get('pausar-assinatura', function () {
    return view('produtor.pausar-assinatura');
});

Route::get('avaliacoes-produtor', function () {
    return view('produtor.avaliacoes-produtor');
});

Route::get('criar-promocao', function () {
    return view('produtor.criar-promocao');
});
Route::get('editar-produto', function () {
    return view('produtor.editar-produto');
});
Route::get('detalhe-assinatura', function () {
    return view('produtor.detalhe-assinatura');
});

Route::get('dashboard-consumidor', function () {
    return view('usuario.dashboard-consumidor');
});

Route::get('enderecos-consumidor', function () {
    return view('usuario.enderecos-consumidor');
});

Route::get('mensagens-consumidor', function () {
    return view('usuario.mensagens-consumidor');
});

Route::get('minhas-assinaturas', function () {
    return view('usuario.minhas-assinaturas');
});

Route::get('dados-consumidor', function () {
    return view('usuario.dados-consumidor');
});

Route::get('cartoes-consumidor', function () {
    return view('usuario.cartoes-consumidor');
});

// ------ ROTAS ADMIN ------- //
//Grupo de rotas para o admin

Route::get('admin', function(){
    return view('auth.admin-login');
});

Route::get('admin-dashboard', function () {
    return view('admin.admin-dashboard');
});
Route::get('admin-usuarios', function () {
    return view('admin.admin-usuarios');
});
Route::get('administradores', function () {
    return view('admin.administradores');
});
Route::get('admin-permisao-edit', function () {
    return view('admin.admin-permisao-edit');
});

Route::get('admin-assinaturas', function () {
    return view('admin.admin-assinaturas');
});
Route::get('admin-detalhes-assinatura', function () {
    return view('admin.admin-detalhes-assinatura');
});


// ------- ROTAS BANCO DE DADOS ------- //
Route::post("/cadUsuario", "ControllerLogin@cadUsuario");

Route::post("/cadAdmin", "ControllerAdmin@cadAdmin");

Route::post("/cadProdutor", "ControllerProdutor@cadProdutor"); //Cria cadastro de Produtor no Banco de Dados.

Route::get('/usuarios', 'ControllerUsuario@index');

Route::get('/admins', 'ControllerUsuario@index');
