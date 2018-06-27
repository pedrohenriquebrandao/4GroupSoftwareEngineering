<?php

namespace App\Http\Controllers;
use App\Endereco;
use App\Produtor;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    public function AddEnderecoProdutor(Request $request){
        $endereco = Endereco::create($request->all());

        return $endereco->id;
    }

    public function addEndereco(Endereco $endereco){
        try{    
            $endereco->save();
            return $endereco->id;
        } catch(\Exception $e){
            return "ERRO: " . $e->getMessage();
        }
    }
}
