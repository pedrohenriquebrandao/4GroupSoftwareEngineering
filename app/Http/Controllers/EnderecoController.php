<?php

namespace App\Http\Controllers;
use App\Endereco;
use App\Produtor;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    public function addEndereco(Endereco $endereco){
        try{    
            $endereco->save();
        } catch(\Exception $e){
            return "ERRO: " . $e->getMessage();
        }
    }
}
