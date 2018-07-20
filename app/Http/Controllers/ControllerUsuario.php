<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;

class ControllerUsuario extends Controller
{

    public function __construct(){
        //$this->middleware('auth:consumidor')->except('cadastrarUsuario');
    }

    public function cadastrarUsuario(Usuario $usuario){
        try{
            $usuario->save();
        } catch(\Exception $e){
            var_dump($e->getMessage());
            //return "Erro: ".$e->getMessage();
        }
    }

    public function validacao($data){
        $regras['cpf'] = 'required|min:9';
        $regras['nome'] = 'required';
        $regras['email'] = 'required';
        $regras['sexo'] = 'required';
        $regras['telefone'] = 'required';
        
        $mensagens = [
            'nome.required' => 'Campo Nome é obrigatório',
            'cpf.required' => 'Campo CPF é obrigatório',
            'cnpj.size' => 'CPF deve conter 9 digitos',
            'sexo.required' => 'Campo sexo é obrigatório',
            'email.required' => 'Campo email é obrigatório',
        ];

        return Validator::make($data, $regras, $mensagens);
    }

    //Funções de rotas para o consumidor;
    public function dashboard(){
        $id = auth()->guard('consumidor')->user()->id; //Pega o id do usuário logado

        //Pega os dados do usuário da tabela de usuários;
        $usuario = DB::table('consumidor_login')
            ->join('consumidor_usuarios', 'consumidor_login.id', '=', 'consumidor_usuarios.login_id')
            ->select('consumidor_login.*', 'consumidor_usuarios.*')
            ->where('consumidor_login.id', $id)->first();

        //Recebe quantas assinaturas o cliente logado possui no banco de dados;
        $assinaturas =  DB::table('consumidor_assinatura')->where('login_id', $id)->count();
        //Recebe quantas cartões o cliente logado possui no banco de dados;
        $cartao =  DB::table('consumidor_cartao')->where('login_id', $id)->count();
        //Recebe quantos endereços o cliente logado possui no banco de dados;        
        $endereco =  DB::table('consumidor_endereco')->where('login_id', $id)->count();
        
        return view('usuario.dashboard-consumidor', compact(
            'usuario',
            'assinaturas',
            'cartao',
            'endereco'
        ));
    }
}