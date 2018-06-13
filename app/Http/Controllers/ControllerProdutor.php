<?php

namespace App\Http\Controllers;
use App\Produtor;
use App\Endereco;
use Illuminate\Http\Request;

class ControllerProdutor extends Controller
{
    private $enderecos_controller;

    public function __construct(EnderecoController $enderecos_controller){
        $this->enderecos_controller = $enderecos_controller;
    }

    public function cadProdutor(Request $request){
        $produtor = Produtor::create($request->all()); //Método create retorna o objeto salvo no bd.
        
        if($request->cep){
            //Cadastra o endereço, mas ainda não o associa ao produtor.
            $endereco = new Endereco();

            $endereco->rua = $request->rua;
            $endereco->bairro = $request->bairro;
            $endereco->cep = $request->cep;
            $endereco->numero = $request->numero;
            $endereco->cidade = $request->cidade;
            $endereco->estado = $request->estado;
            $endereco->complemento = $request->complemento;
            $endereco->zona = $request->zona;
            $endereco->produtor_id = $produtor->id;
            
            $this->enderecos_controller->addEndereco($endereco);
        }
        return redirect("/")->with("message", "Produtor criado com sucesso!");
    }
}