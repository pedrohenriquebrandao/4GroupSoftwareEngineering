<?php

namespace App\Http\Controllers;

use App\User; //Permissão para usar a classe User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ControllerUser extends Controller
{   
    private $user;

    public function novoUser(Request $request){
        $user = User::create($request->all());
    }
}
