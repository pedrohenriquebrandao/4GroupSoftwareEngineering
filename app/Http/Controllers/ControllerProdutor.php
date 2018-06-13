<?php

namespace App\Http\Controllers;
use App\Produtor;
use App\Endereco;
use Illuminate\Http\Request;

class ControllerProdutor extends Controller
{
    private $enderecos_controller;
    private $produtor;

    public function __construct(EnderecoController $enderecos_controller){
        $this->enderecos_controller = $enderecos_controller;
        $this->produtor = new Produtor();
    }

    public function cadProdutor(Request $request){
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
            
            $id = $this->enderecos_controller->addEndereco($endereco);
            //$produtor->id = $id;
        }

        $produtor = Produtor::create($request->all()); //Método create retorna o objeto salvo no bd.
        return redirect("/")->with("message", "Produtor criado com sucesso!");
    }
}