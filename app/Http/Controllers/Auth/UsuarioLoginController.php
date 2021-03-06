<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UsuarioLoginController extends Controller
{
    public function __construct(){
        //$this->middleware('guest:consumidor')->except('logout'); //Exception para logout no middleware;
    }

    //Login consumidor;
    public function login(Request $request){
        //dd($request->email, $request->password);
        
        //Validar dados do formulário
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //Tentativa de logar o usuário
        if ( Auth::guard('consumidor')->attempt(['email' => $request->email, 'password' => $request->password]) ) {
            //Se for bem sucedido, redireciona para o local pretendido;
            return redirect()->intended( route('/') );
        }else {
            //se mal sucedido, redireciona de volta para o login com os dados do formulário
            return redirect()->back()->withInput( $request->only('email') );
        }
    }

    //Logout consumidor;
    public function logout()
    {
        Auth::guard('consumidor')->logout();
        return redirect('/');
    }

    //Rotas para o consumidor;
    public function loginConsumidor(){
        return view('auth.consumidor-login');
    }

    public function paginaInicial(){
        return view('home');
    }
}