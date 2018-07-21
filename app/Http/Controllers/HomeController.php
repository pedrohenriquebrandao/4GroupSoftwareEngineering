<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrinho;
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
        $produtos = DB::table('produtor_produto')->get();
        $frutas = DB::table('produtor_produto')->where('tipo', 'fruta')->get();
        $verduras = DB::table('produtor_produto')->where('tipo', 'verdura')->get();
        $outros = DB::table('produtor_produto')->where('tipo', '!=', 'verdura')->where('tipo', '!=', 'fruta')->get();
        $lojas = DB::table('produtores')->select('produtores.id', 'produtores.nome')->distinct('id')->get();
        
        if (Auth::guard('consumidor')->check()) {
            $id = auth()->guard('consumidor')->user()->id;
            $usuario = $this->getDados();
            $carrinho = DB::table('consumidor_carrinho')->where('usuario_id', '=', $id)->count();
            
            //Verifica se o usuário possui loja cadastrada;
            $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();

            return view('principal', compact('usuario', 'possuiLoja', 'carrinho', 'produtos', 'frutas', 'verduras', 'outros', 'lojas'));
        } else {
            return view('principal', compact('produtos','frutas', 'verduras', 'outros', 'lojas'));
        }
    }

    public function indexLojas(){
        if (Auth::guard('consumidor')->check()) {
            $id = auth()->guard('consumidor')->user()->id;
            $usuario = $this->getDados();
            $carrinho = DB::table('consumidor_carrinho')->where('usuario_id', '=', $id)->count();
            
            //Verifica se o usuário possui loja cadastrada;
            $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();
            return view('index-lojas', compact('usuario', 'carrinho', 'possuiLoja'));
        }
        return view('index-lojas', compact('usuario', 'carrinho', 'possuiLoja'));
    }

    public function visaoLoja(){
        if (Auth::guard('consumidor')->check()) {
            $id = auth()->guard('consumidor')->user()->id;
            $usuario = $this->getDados();
            $carrinho = DB::table('consumidor_carrinho')->where('usuario_id', '=', $id)->count();
            
            //Verifica se o usuário possui loja cadastrada;
            $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();
            return view('visao-loja', compact('usuario', 'carrinho', 'possuiLoja'));
        }
        return view('visao-loja', compact('usuario', 'carrinho', 'possuiLoja'));
    }

    public function indexPromocoes(){
        if (Auth::guard('consumidor')->check()) {
            $id = auth()->guard('consumidor')->user()->id;
            $usuario = $this->getDados();
            $carrinho = DB::table('consumidor_carrinho')->where('usuario_id', '=', $id)->count();
            
            //Verifica se o usuário possui loja cadastrada;
            $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();
            return view('index-promocoes', compact('usuario', 'carrinho', 'possuiLoja'));
        }
        return view('index-promocoes', compact('usuario', 'carrinho', 'possuiLoja'));
    }

    public function pagamento(){
        if (Auth::guard('consumidor')->check()) {
            $id = auth()->guard('consumidor')->user()->id;
            $usuario = $this->getDados();
            $carrinho = DB::table('consumidor_carrinho')->where('usuario_id', '=', $id)->count();
            
            //Verifica se o usuário possui loja cadastrada;
            $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();
            return view('usuario.pagamento', compact('usuario', 'carrinho', 'possuiLoja'));
        }
        return view('usuario.pagamento', compact('usuario', 'carrinho', 'possuiLoja'));
    }

    public function indexCarrinho(){
        $id = auth()->guard('consumidor')->user()->id;

        $produtos = DB::table('consumidor_carrinho')
        ->join('produtor_produto', 'consumidor_carrinho.produto_id', '=', 'produtor_produto.id')
        ->select('produtor_produto.*')->where('consumidor_carrinho.usuario_id', $id)->get();

        $lojas = DB::table('produtor_produto')->join('produtores', 'produtor_produto.produtor_id', '=', 'produtores.id')
        ->select('produtores.id', 'produtores.nome')->where('tipo', 'fruta')->get();

        if (Auth::guard('consumidor')->check()) {
            $usuario = $this->getDados();
            $carrinho = DB::table('consumidor_carrinho')->where('usuario_id', '=', $id)->count();
            
            //Verifica se o usuário possui loja cadastrada;
            $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();
            return view('usuario.carrinho', compact('usuario', 'possuiLoja', 'carrinho', 'produtos', 'lojas'));
        }

        return view('usuario.carrinho');
    }

    public function AddCarrinho($idProduto){
        $id_usuario = auth()->guard('consumidor')->user()->id;

        $carrinho = new Carrinho();
        $carrinho->usuario_id = $id_usuario;
        $carrinho->produto_id = $idProduto;
        $carrinho->save();

        return redirect( route('carrinho') );
    }
    
    public function removerCarrinho($idProduto){
        $produto = DB::table('consumidor_carrinho')->where('produto_id', $idProduto)->first();
        
        $produtoRemove = Carrinho::find($produto->id); //Recupera o produto pelo id;
        
        $delete = $produtoRemove->delete($produto->id);
        
        return redirect( route('carrinho') );
    }
    
    public function limparCarrinho(){
        $id_usuario = auth()->guard('consumidor')->user()->id;

        $delete = DB::table('consumidor_carrinho')
        ->where('consumidor_carrinho.usuario_id', $id_usuario)->delete();

        return redirect( route('carrinho') );
    }

    public function indexFrutas(){
        $frutas = DB::table('produtor_produto')->where('tipo', 'fruta')->get();
        $lojas = DB::table('produtor_produto')->join('produtores', 'produtor_produto.produtor_id', '=', 'produtores.id')
        ->select('produtores.id', 'produtores.nome')->where('tipo', 'fruta')->get();
        
        if (Auth::guard('consumidor')->check()) {
            $id = auth()->guard('consumidor')->user()->id;
            $usuario = $this->getDados();
            $carrinho = DB::table('consumidor_carrinho')->where('usuario_id', '=', $id)->count();
            
            //Verifica se o usuário possui loja cadastrada;
            $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();
            return view('index-frutas', compact('usuario', 'possuiLoja', 'carrinho', 'frutas', 'lojas'));
        }
        return view('index-frutas', compact('frutas', 'lojas'));
    }
    
    public function indexVerduras(){
        $verduras = DB::table('produtor_produto')->where('tipo', 'verdura')->get();
        $lojas = DB::table('produtor_produto')->where('tipo', 'verdura')
        ->join('produtores', 'produtor_produto.produtor_id', '=', 'produtores.id')
        ->select('produtores.id', 'produtores.nome')->get();
        
        if (Auth::guard('consumidor')->check()) {
            $id = auth()->guard('consumidor')->user()->id;
            $usuario = $this->getDados();
            $carrinho = DB::table('consumidor_carrinho')->where('usuario_id', '=', $id)->count();
            
            //Verifica se o usuário possui loja cadastrada;
            $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();
            return view('index-verduras', compact('usuario', 'possuiLoja', 'carrinho', 'verduras', 'lojas'));
        }

        //dd($lojas);
        return view('index-verduras', compact('verduras', 'lojas'));
    }
    
    public function indexTuberculos(){
        $tuberculos = DB::table('produtor_produto')->where('tipo', '!=', 'verdura')->where('tipo', '!=', 'fruta')->get();
        $lojas = DB::table('produtor_produto')->where('tipo', '!=', 'verdura')->where('tipo', '!=', 'fruta')
        ->join('produtores', 'produtor_produto.produtor_id', '=', 'produtores.id')
        ->select('produtores.id', 'produtores.nome')->get();
        
        if (Auth::guard('consumidor')->check()) {
            $id = auth()->guard('consumidor')->user()->id;
            $usuario = $this->getDados();
            $carrinho = DB::table('consumidor_carrinho')->where('usuario_id', '=', $id)->count();
            
            //Verifica se o usuário possui loja cadastrada;
            $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();
            return view('index-tuberculos', compact('usuario', 'possuiLoja', 'carrinho', 'tuberculos', 'lojas'));
        }

        return view('index-tuberculos', compact('tuberculos', 'lojas'));
    }

    public function visaoProduto($idProduto){
        $produto = DB::table('produtor_produto')->where('produtor_produto.id', $idProduto)->first();
        $loja = DB::table('produtores')->where('produtores.id', $produto->produtor_id)->first();
        $produtosLoja = DB::table('produtor_produto')->where('produtor_id', $loja->id)
        ->where('tipo', $produto->tipo)->get();

        if (Auth::guard('consumidor')->check()) {
            $id = auth()->guard('consumidor')->user()->id;
            $usuario = $this->getDados();
            $carrinho = DB::table('consumidor_carrinho')->where('usuario_id', '=', $id)->count();
            
            //Verifica se o usuário possui loja cadastrada;
            $possuiLoja =  DB::table('produtores')->where('login_id', $id)->exists();
            return view('visao-produto', compact('usuario', 'carrinho', 'possuiLoja', 'produto', 'loja', 'produtosLoja'));
        }
        //dd($produtosLoja);
        return view('visao-produto', compact('produto', 'loja', 'produtosLoja'));
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