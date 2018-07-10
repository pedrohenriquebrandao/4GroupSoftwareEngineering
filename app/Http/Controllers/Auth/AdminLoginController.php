<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin');
    }
    
    public function login(Request $request){
        //Validar dados do formulário
        $this->validate($request, [
            'email' => 'required|email',
            'senha' => 'required|min:6'
        ]);

        //Tentativa de logar o usuário
        if ( Auth::guard('admin')->attempt(['email' => $request->email, 'senha' => $request->senha]) ) {
            //Se for bem sucedido, redireciona para o local pretendido;
            //return redirect()->intended( route('admin.dashboard') );
            return 'Logou';
        }else {
            return 'num logou';
            //se mal sucedido, redireciona de volta para o login com os dados do formulário
            //return redirect()->back()-withInput( $request->only('email') );
        }
    }
}