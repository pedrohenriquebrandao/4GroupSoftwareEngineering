<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function cadUsuario(Request $request){
        Usuario::create($request->all());
        return redirect("/")->with("message", "Usuário criado com sucesso!");
    }

    public function cadastrarUsuario(Usuario $usuario){
        try{
            $usuario->save();
        } catch(\Exception $e){
            return "Erro: ".$e->getMessage();
        }
    }
}