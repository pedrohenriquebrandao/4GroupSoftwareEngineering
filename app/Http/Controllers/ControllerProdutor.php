<?php

namespace App\Http\Controllers;
use App\Produtor;
use App\Endereco;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;

class ControllerProdutor extends Controller
{
    private $endereco_controller;
    private $produtor;

    public function __construct(EnderecoController $endereco_controller){
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

        try{
            $produtor->save();
        }catch(\Exception $e){
            var_dump($e->getMessage());
        }
        return redirect("/")->with("message", "Produtor criado com sucesso!");
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
        $regras['complemento'] = 'required';

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
            'complemento.required' => 'Campo Complemento obrigatório'
        ];

        return Validator::make($data, $regras, $mensagens);
    }
    
}