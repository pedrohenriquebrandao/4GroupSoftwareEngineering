<?php

namespace App\Http\Controllers;
use App\Login;
use App\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $usuario_controller;
    private $login;

    public function __construct(UsuarioController $usuario_controller){
        $this->usuario_controller = $usuario_controller;
        $this->login = new Login();
    }

    public function cadLogin(Request $request){
        $login = Login::create($request->all());

        //Passa os dados recebidos da tela de cadastro para o controller de usuários
        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->cpf = $request->cpf;
        $usuario->sexo = $request->sexo;
        $usuario->telefone = $request->telefone;
        $usuario->login_id = $login->id;
        
        $this->usuario_controller->cadastrarUsuario($usuario);

        return redirect("/")->with("message", "Usuario criado com sucesso!");
    }
}