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

    public function indexPrincipal(){
        $frutas = DB::table('produtor_produto')->where('tipo', 'fruta')->get();
        $verduras = DB::table('produtor_produto')->where('tipo', 'verdura')->get();
        $outros = DB::table('produtor_produto')->where('tipo', '!=', 'verdura')->where('tipo', '!=', 'fruta')->get();
        
        if (Auth::guard('consumidor')->check()) {
            $id = auth()->guard('consumidor')->user()->id;
            $usuario = $this->getDados();
            $carrinho = DB::table('consumidor_carrinho')->where('usuario_id', '=', $id)->count();
            
            //Verifica se o usuário possui loja cadastrada;
            $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();
            

            //dd($frutas, $verduras);

            return view('principal', compact('usuario', 'possuiLoja', 'carrinho', 'frutas', 'verduras', 'outros'));
        } else {
            return view('principal', compact('frutas', 'verduras', 'outros'));
        }
    }

    public function indexCarrinho(){
        $id = auth()->guard('consumidor')->user()->id;
        $usuario = $this->getDados();
        $carrinho = DB::table('consumidor_carrinho')->where('usuario_id', '=', $id)->count();

        //Verifica se o usuário possui loja cadastrada;
        $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();

        return view('usuario.carrinho', compact('usuario', 'carrinho', 'possuiLoja'));
    }

    public function indexFrutas(){
        $id = auth()->guard('consumidor')->user()->id;

        $usuario = $this->getDados();
        $carrinho = DB::table('consumidor_carrinho')->where('usuario_id', '=', $id)->count();
        $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();

        $frutas = DB::table('produtor_produto')->where('tipo', 'fruta')->get();
        $lojas = DB::table('produtor_produto')->join('produtores', 'produtor_produto.produtor_id', '=', 'produtores.id')
        ->select('produtores.id', 'produtores.nome')->where('tipo', 'fruta')->get();
        
        return view('index-frutas', compact('usuario', 'possuiLoja', 'carrinho', 'frutas', 'lojas'));
    }
    
    public function indexVerduras(){
        $id = auth()->guard('consumidor')->user()->id;

        $usuario = $this->getDados();
        $carrinho = DB::table('consumidor_carrinho')->where('usuario_id', '=', $id)->count();
        $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();

        $verduras = DB::table('produtor_produto')->where('tipo', 'verdura')->get();
        $lojas = DB::table('produtor_produto')->where('tipo', 'verdura')
        ->join('produtores', 'produtor_produto.produtor_id', '=', 'produtores.id')
        ->select('produtores.id', 'produtores.nome')->get();
        
        //dd($lojas);
        return view('index-verduras', compact('usuario', 'possuiLoja', 'carrinho', 'verduras', 'lojas'));
    }
    
    public function indexTuberculos(){
        $id = auth()->guard('consumidor')->user()->id;

        $usuario = $this->getDados();
        $carrinho = DB::table('consumidor_carrinho')->where('usuario_id', '=', $id)->count();
        $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();
        
        $tuberculos = DB::table('produtor_produto')->where('tipo', '!=', 'verdura')->where('tipo', '!=', 'fruta')->get();
        $lojas = DB::table('produtor_produto')->where('tipo', '!=', 'verdura')->where('tipo', '!=', 'fruta')
        ->join('produtores', 'produtor_produto.produtor_id', '=', 'produtores.id')
        ->select('produtores.id', 'produtores.nome')->get();
        return view('index-tuberculos', compact('usuario', 'possuiLoja', 'carrinho', 'tuberculos', 'lojas'));
    }

    private function getDados(){
        $id = auth()->guard('consumidor')->user()->id;
            
        //Obtém os dados da tabela consumidor_usuários do usuário logado;
        $usuario = DB::table('consumidor_login')
        ->join('consumidor_usuarios', 'consumidor_login.id', '=', 'consumidor_usuarios.login_id')
        ->select('consumidor_login.*', 'consumidor_usuarios.*')
        ->where('consumidor_login.id', $id)->first();

        return $usuario;
    }
}