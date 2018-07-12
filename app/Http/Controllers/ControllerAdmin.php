<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash; //Facade hash para senha
use Illuminate\Http\Request;
use DB;

class ControllerAdmin extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function cadAdmin(Request $request){
        $validacao = $this->validacao($request->all());

        if($validacao->fails()){
            return redirect()->back()->withErrors($validacao->errors())->withInput($request->all());
        }
        
        $admin = new Admin();
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->nome = $request->nome;
        $admin->telefone = $request->telefone;
        
        try{
            $admin->save();
        } catch(\Exception $e){
            var_dump($e->getMessage());
            //return "Erro: ".$e->getMessage();
        }
        
        //$request->password = Hash::make($request->password);
        //Admin::create($request->all());
        return redirect("/");   
    }

    public function validacao($data){
        $regras['email'] = 'required|email';
        $regras['password'] = 'required|min:6';
        $regras['confirmasenha'] = 'required|same:password';
        $regras['nome'] = 'required';
        $regras['telefone'] = 'required';
        
        $mensagens = [
            'nome.required' => 'Campo Nome é obrigatório',
            'email.required' => 'Campo email é obrigatório',
            'email.email' => 'E-mail inserido invalido',
            'password.required' => 'Campo senha é obrigatório',
            'password.min' => 'A senha deve conter no mínimo 6 caracteres',
            'confirmasenha.required' => 'Campo confirmação de senha necessário',
            'confirmasenha.same' => 'A confirmação de senha não condiz com a senha informada',
            'telefone.required' => 'Campo telefone é obrigatório',
        ];

        return Validator::make($data, $regras, $mensagens);
    }

    //Funcções de retorno de view para as rotas de admin;
    public function index(){
        return view('admin.admin-dashboard');
    }

    public function listaUsuarios(){
        return view('admin.admin-usuarios');
    }

    public function listaAdmins(){
        //Pega todos os cadastros da tabela de administrador e guarda em '$listaAdm';
        $listaAdm = DB::table('adm_administrador')->get();
        
        //Duas formas de retornar para a view;
        //-- 1º --//
        /*return view('who', [
            'listaAdm' => $listaAdm
        ]);*/

        //-- 2º Usando compact --//
        return view('admin.administradores', compact('listaAdm'));
    }
}