<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ControllerAdmin extends Controller
{
    public function index(){
        return view('dashboard-admin.admins');
    }

    public function cadAdmin(Request $request){
        $validacao = $this->validacao($request->all());

        if($validacao->fails()){
            return redirect()->back()->withErrors($validacao->errors())->withInput($request->all());
        }
        
        $admin = new Admin();
        $admin->email = $request->email;
        $admin->senha = $request->senha;
        $admin->nome = $request->nome;
        $admin->telefone = $request->telefone;
        
        try{
            $admin->save();
        }catch(\Exception $e){
            var_dump($e->getMessage());
        }
        return redirect("/");   
    }

    public function validacao($data){
        $regras['email'] = 'required';
        $regras['senha'] = 'required|size:6';
        $regras['nome'] = 'required';
        $regras['telefone'] = 'required';
        
        $mensagens = [
            'nome.required' => 'Campo Nome é obrigatório',
            'email.required' => 'Campo email é obrigatório',
            'senha.required' => 'Campo senha é obrigatório',
            'telefone.required' => 'Campo telefone é obrigatório',
        ];

        return Validator::make($data, $regras, $mensagens);
    }
}