<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UsuarioLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:usuario');
    }

    public function login(Request $request){
        //Validar dados do formulário
        $this->validate($request, [
            'email' => 'required|email',
            'senha' => 'required|min6'
        ]);

        //Tentativa de logar o usuário
        if ( Auth::guard('usuario')->attempt(['email' => $request->email, 'senha' => $request->senha],
         $request->remember) ) {
            //Se for bem sucedido, redireciona para o local pretendido;
            return redirect()->intended( route('/') );
        }else {
            //se mal sucedido, redireciona de volta para o login com os dados do formulário
            return redirect()->back()-withInput( $request->only('email', 'remember') );
        }
    }
}
