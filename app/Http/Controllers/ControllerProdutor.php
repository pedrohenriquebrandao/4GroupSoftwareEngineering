<?php

namespace App\Http\Controllers;
use App\Produtor;
use App\Endereco;
use App\Produto;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Http\UploadedFile;

class ControllerProdutor extends Controller
{
    private $endereco_controller;
    private $produtor;

    public function __construct(ControllerEndereco $endereco_controller){
        $this->middleware('auth:consumidor');
        $this->endereco_controller = $endereco_controller;
        $this->produtor = new Produtor();
    }

    public function cadProdutor(Request $request){
        $validacao = $this->validacao($request->all());

        if($validacao->fails()){
            return redirect()->back()->withErrors($validacao->errors())->withInput($request->all());
        }

        $id_endereco = $this->endereco_controller->AddEnderecoProdutor($request);
        
        $produtor = new Produtor();
        $produtor->nome = $request->nome;
        $produtor->cnpj = $request->cnpj;
        $produtor->endereco_id = $id_endereco;
        $produtor->login_id = auth()->guard('consumidor')->user()->id;

        try{
            $produtor->save();
        }catch(\Exception $e){
            var_dump($e->getMessage());
        }
        return redirect("dashboard-produtor")->with("message", "Produtor criado com sucesso!");
    }

    public function validacao($data){
        $regras['nome'] = 'required|min:5';
        $regras['cnpj'] = 'required|size:14';
        
        //Regras para o endereço
        $regras['rua'] = 'required';
        $regras['bairro'] = 'required';
        $regras['cep'] = 'required|size:8';
        $regras['numero'] = 'required';
        $regras['cidade'] = 'required';
        $regras['estado'] = 'required';

        $mensagens = [
            'nome.required' => 'Campo Nome é obrigatório',
            'nome.min' => 'Campo nome deve ter no mínimo 5 letras',
            'cnpj.required' => 'Campo CNPJ obrigatório',
            'cnpj.size' => 'CNPJ deve conter 14 digitos',
            'rua.required' => 'Campo rua obrigatório',
            'bairro.required' => 'Campo bairro obrigatório',
            'cep.required' => 'Campo CEP obrigatório',
            'cep.size' => 'CEP deve conter no mínimo 8 digitos',
            'numero.required' => 'Campo numero obrigatório',
            'cidade.required' => 'Campo Cidade obrigatório',
            'estado.required' => 'Campo Estado obrigatório',
        ];

        return Validator::make($data, $regras, $mensagens);
    }

    //Funções de rotas para produtor
    public function cadastroProdutor(){
        return view('auth.cadastrar-produtor');
    }

    public function dashboard(){
        $id = Auth::guard('consumidor')->user()->id;

        $loja = DB::table('produtores')->where('produtores.id', $id)->first();
        //dd($id, $loja);
        return view('produtor.dashboard-produtor', compact('loja'));
    }

    public function telaAddProduto(){
        $id = Auth::guard('consumidor')->user()->id;
        $usuario = $this->getDadosConsumidor();
        $loja = DB::table('produtores')->where('produtores.login_id', $id)->first();

        return view('produtor.adicionar-produtos', compact('loja', 'usuario'));
    }
    
    public function addProduto(Request $request){
        $id = Auth::guard('consumidor')->user()->id;

        $validacao = $this->validacaoProduto($request->all());
        
        if($validacao->fails()){
            return redirect()->back()->withErrors($validacao->errors())->withInput($request->all());
        }
        
        $imagem = $request->imagem;
        
        //Verifica se há imagem selecionada e se é valida.
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            //Seleciona um nome para a imagem.
            $name = uniqid(date('HisYmd'))."".$id;
            //Pega a extensão da imagem.
            $extension = $request->imagem->extension();
            
            //Nome final da imagem;
            $nameFile = "{$name}.{$extension}";
            //Salva a imagem na pasta storage/app/public/imagem-produtos
            $upload = $request->imagem->storeAs('imagem-produtos', $nameFile);
        }

        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->tipo = $request->tipo;
        $produto->qtd_frete_gratis = $request->fretegratis;
        $produto->imagem = $nameFile;
        //Pega o id do produtor/loja no banco de dados.
        $idProdutor = DB::table('produtores')->select('id')->where('login_id', $id)->first();
        $produto->produtor_id = $idProdutor->id;
        
        try{
            $produto->save();
        }catch(\Exception $e){
            var_dump($e->getMessage());
        }
        return redirect("adicionar-produtos")->with("message", "Produto cadastrado com sucesso!");
    }

    public function validacaoProduto($data){
        $regras['nome'] = 'required|min:3';
        $regras['descricao'] = 'required';
        $regras['tipo'] = 'required';
        //$regras['valor'] = 'required';
        //$regras['imagem'] = 'required';
        $regras['fretegratis'] = 'required';

        $mensagens = [
            'nome.required' => 'Campo Nome é obrigatório',
            'nome.min' => 'Campo nome deve ter no mínimo 3 letras',
            'tipo.required' => 'Campo tipo é obrigatório',
            'descricao.required' => 'Campo descricao é obrigatório',
            //'imagem.required' => 'Necessário selecionar uma imagem para o produto',
            //'valor.required' => 'Necessário informar um valor',
            'fretegratis' => 'Necessário informar quantidade para frete grátis'
        ];

        return Validator::make($data, $regras, $mensagens);
    }

    public function gerenciarProdutos(){
        $id = Auth::guard('consumidor')->user()->id;

        $loja = DB::table('produtores')->where('produtores.login_id', $id)->first();
        $produtos = DB::table('produtor_produto')->where('produtor_produto.produtor_id', $loja->id)->get();
        //dd($produtos);

        return view('produtor.gerenciar-produtos', compact('loja', 'produtos'));
    }

    public function editarProduto($id){
        $idProdutor = Auth::guard('consumidor')->user()->id; //Pega o id do usuário logado;
        //Recupera os dados do produtor pelo id do usuário logado;
        $loja = DB::table('produtores')->where('produtores.login_id', $idProdutor)->first();
        
        $produto = Produto::find($id); //Recupera o produto pelo id;
        
        return view("produtor.editar-produto", compact('loja', 'produto'));
    }

    public function updateProduto(Request $request){
        $data = $request->all();

        $validacao = $this->validacaoProduto($request->all());

        if($validacao->fails()){
            return redirect()->back()->withErrors($validacao->errors())->withInput($request->all());
        }

        $produto = Produto::find($request->id); //Recupera o produto pelo id;

        $imagem = $request->imagem;
        
        //Verifica se há imagem selecionada e se é valida.
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $name = $produto->imagem;

            //Pega a extensão da imagem.
            $extension = $request->imagem->extension();

            //Nome final da imagem;
            $nameFile = "{$name}.{$extension}";
            $data['imagem'] = $nameFile;

            //Salva a imagem na pasta storage/app/public/imagem-produtos
            $upload = $request->imagem->storeAs('imagem-produtos', $nameFile);
        }
        
        $update = $produto->update($data);
        return redirect("gerenciar-produtos")->with("message", "Produto cadastrado com sucesso!");
    }

    public function excluirProduto($id){
        $produto = Produto::find($id); //Recupera o produto pelo id;
        
        $delete = $produto->delete($id);

        return redirect("gerenciar-produtos")->with("message", "Produto excluido com sucesso!");
    }

    //----- métodos de apoio -----//
    private function getDadosConsumidor(){
        $id = Auth::guard('consumidor')->user()->id;
        
        //Obtém os dados da tabela consumidor_usuários do usuário logado;
        $usuario = DB::table('consumidor_login')
        ->join('consumidor_usuarios', 'consumidor_login.id', '=', 'consumidor_usuarios.login_id')
        ->select('consumidor_login.*', 'consumidor_usuarios.*')
        ->where('consumidor_login.id', $id)->first();

        return $usuario;
    }
}