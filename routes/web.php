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
// -------- ROTAS HOMEPAGE -------- //

Route::get("/", "HomeController@index")
->name('/');

Route::get('pagamento', function () {
    return view('usuario.pagamento');
});

Route::get('entrarConsumidor', function () {
    return view('auth.consumidor');
});

Route::get('carrinho', function () {
    return view('usuario.carrinho');
});

Route::get('visao-produto', function () {
    return view('visao-produto');
});

// ------ ROTAS DE CADASTRO --------- //

Route::post("/cadUsuario", "ControllerLogin@cadUsuario");

Route::post("/cadAdmin", "ControllerAdmin@cadAdmin");

Route::get('cadastrar-admin', 'ControllerAdmin@telaCadastro');

Route::post("/cadProdutor", "ControllerProdutor@cadProdutor"); //Cria cadastro de Produtor no Banco de Dados.

Route::get('/usuarios', 'ControllerUsuario@index');

Route::get('cadastrar-produtor', "ControllerProdutor@cadastroProdutor")->name('cadastrar.loja');

Route::get('/admins', 'ControllerUsuario@index');

Route::get('cadastrar', function () {
    return view('auth.cadastrar');
});

Route::get('recuperar-senha', function () {
    return view('auth.recuperar-senha');
});


Route::get('recsenhaconfirm', function () {
    return view('auth.recsenhaconfirm');
});

// ------ ROTAS DASHBOARD CONSUMIDOR ------//
Route::get('dashboard-consumidor', 'ControllerUsuario@dashboard')
    ->name('consumidor.dashboard'); //Rota para o dashboard do consumidor;

// ------ ROTAS DASHBOARD PRODUTOR ------ //
Route::get('dashboard-produtor', 'ControllerProdutor@dashboard')->name('produtor.dashboard');

Route::get('produtor-sidebar', function () {
    return view('produtor.produtor-sidebar');
});

Route::get('adicionar-produtos', 'ControllerProdutor@telaAddProduto')->name('produtor.adicionar.produto');
Route::post('adicionar-produtos', 'ControllerProdutor@addProduto')->name('produtor.adicionar');

Route::get('comentarios-produtor', function () {
    return view('produtor.comentarios-produtor');
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

Route::get('assinaturas-pausadas', function () {
    return view('assinaturas-pausadas');
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

// ---------------- ROTAS ADMIN ---------------- //
Route::get('admin-dashboard', 'ControllerAdmin@dashboard')
    ->name('admin.dashboard'); //Rota para o dashboard admin;

Route::get('admin-usuarios', 'ControllerAdmin@listaUsuarios')
    ->name('listaUsuarios');

Route::get('administradores', 'ControllerAdmin@listaAdmins')
    ->name('listaAdmins');

Route::get('admin-permisao-edit', function () {
    return view('admin.admin-permisao-edit');
});

Route::get('admin-assinaturas', function () {
    return view('admin.admin-assinaturas');
});

Route::get('admin-detalhes-assinatura', function () {
    return view('admin.admin-detalhes-assinatura');
});

Route::get('visao-produto/{id}', function ($id) {
    return view('visao-produto', ['id'=> $id]);
});


// ------- ROTAS BACK-END ------- //

// ----------- ROTAS ADMIN ------------//
// ------- Rota de login do adm -------//

Route::get('loginAdmin', 'Auth\AdminLoginController@loginAdm')
    ->name('admin.login'); //Rota de tela de login

Route::post('loginAdmin', 'Auth\AdminLoginController@login')
    ->name('admin.login.submit'); //Rota de login

Route::get('logoutAdmin', 'Auth\AdminLoginController@logout')
    ->name('admin.logout'); //Rota de logout

// ---- ROTA DE LOGIN DE USUARIO ---- //

Route::get('loginConsumidor', 'Auth\UsuarioLoginController@loginConsumidor')
    ->name('consumidor.login'); //Rota de tela de login

Route::post('loginConsumidor', 'Auth\UsuarioLoginController@login')
    ->name('consumidor.login.submit'); //Rota de login

Route::get('logoutConsumidor', 'Auth\UsuarioLoginController@logout')
    ->name('consumidor.logout'); //Rota de logout

Route::get('paginaInicial', 'Auth\UsuarioLoginController@paginaInicial')
    ->name('paginaInicial'); //Rota da tela inicial para usuário


// Rota de testes Back //

Route::get('/who', function(){
    return view('who');
});

Route::get("/listarAdm", "ControllerAdmin@listaAdmins");

Auth::routes();