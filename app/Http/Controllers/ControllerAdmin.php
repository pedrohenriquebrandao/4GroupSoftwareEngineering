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
        
        Admin::create($request->all());
        return redirect("/");   
    }

    public function validacao($data){
        $regras['email'] = 'required';
        $regras['senha'] = 'required|min:6';
        $regras['confirmasenha'] = 'required|same:senha';
        $regras['nome'] = 'required';
        $regras['telefone'] = 'required';
        
        $mensagens = [
            'nome.required' => 'Campo Nome é obrigatório',
            'email.required' => 'Campo email é obrigatório',
            'senha.required' => 'Campo senha é obrigatório',
            'senha.min' => 'A senha deve conter no mínimo 6 caracteres',
            'confirmasenha.required' => 'Campo confirmação de senha necessário',
            'confirmasenha.same' => 'A confirmação de senha não condiz com a senha informada',
            'telefone.required' => 'Campo telefone é obrigatório',
        ];

        return Validator::make($data, $regras, $mensagens);
    }
}