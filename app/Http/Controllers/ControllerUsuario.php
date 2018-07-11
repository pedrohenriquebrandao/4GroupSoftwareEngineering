<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ControllerUsuario extends Controller
{

    public function cadastrarUsuario(Usuario $usuario){
        try{
            $usuario->save();
        } catch(\Exception $e){
            var_dump($e->getMessage());
            //return "Erro: ".$e->getMessage();
        }
    }

    public function cadUsuario(Request $request){
        $validacao = $this->validacao($request->all());

        if($validacao->fails()){
            return redirect()->back()->withErrors($validacao->errors())->withInput($request->all());
        }
        
        $usuario = new Usuario();
        $usuario->email = $request->email;
        $usuario->cpf = $request->cpf;
        $usuario->nome = $request->nome;
        $usuario->sexo = $request->sexo;
        $usuario->telefone = $request->telefone;

        try{
            $usuario->save();
        }catch(\Exception $e){
            var_dump($e->getMessage());
        }
        return redirect("/");   
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
    public function index(){
        return view('usuario.dashboard-consumidor');
    }
}