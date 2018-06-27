<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        return view('dashboard-admin.clientes');
    }
    public function cadUsuario(Request $request){
        Usuario::create($request->all());
        
    }
}