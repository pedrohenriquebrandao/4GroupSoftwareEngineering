<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //Retorna a página home verificando se o usuário está logado, caso esteja, retorna a view com os dados, caso contrário, só retorna a view;
    public function index()
    {
        if (Auth::guard('consumidor')->check()) {
            $id = auth()->guard('consumidor')->user()->id;
            
            //Obtém os dados da tabela consumidor_usuários do usuário logado;
            $usuario = DB::table('consumidor_login')
            ->join('consumidor_usuarios', 'consumidor_login.id', '=', 'consumidor_usuarios.login_id')
            ->select('consumidor_login.*', 'consumidor_usuarios.*')
            ->where('consumidor_login.id', $id)->first();

            //Verifica se o usuário possui loja cadastrada;
            $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();
            
            //dd($possuiLoja);

            return view('home', compact('usuario', 'possuiLoja'));
        } else {
            return view('home');
        }
    }
}