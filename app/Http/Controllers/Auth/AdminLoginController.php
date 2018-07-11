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
            'password' => 'required|min:6'
        ]);

        //Tentativa de logar o usuário
        if ( Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]) ) {
            //Se for bem sucedido, redireciona para o local pretendido;
            return redirect()->intended( route('admin.dashboard') );
        }else {
            //se mal sucedido, redireciona de volta para o login com os dados do formulário
            return redirect()->back()->withInput( $request->only('email') );
        }
    }
    
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}