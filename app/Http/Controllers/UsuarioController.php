<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function cadUsuario(Request $request){
        $request->sexo = 'teste';
        Usuario::create($request->all());
        return redirect("/")->with("message", "Usuário criado com sucesso!");
    }
}