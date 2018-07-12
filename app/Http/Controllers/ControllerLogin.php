<?php

namespace App\Http\Controllers;
use App\Login; //Caso não venha importado, fazer importação.
use App\Usuario; //Caso não venha importado, fazer importação.
use Illuminate\Support\Facades\Validator; //Necessário importar o validator do facades para validação.
use Illuminate\Support\Facades\Hash; //Facade hash para senha
use Illuminate\Http\Request;

class ControllerLogin extends Controller
{
    private $usuario_controller;
    private $login;

    public function __construct(ControllerUsuario $usuario_controller){
        $this->usuario_controller = $usuario_controller;
        $this->login = new Login();
    }

    public function cadUsuario(Request $request){
        $validacao = $this->validacao($request->all()); //Chama o método de validação passando os dados como parâmetro

        //Verifica se houve algum dado que não passou na verificação e retorna o erro!
        if($validacao->fails()){
            return redirect()->back()->withErrors($validacao->errors())->withInput($request->all());
        }

        $login = Login::create($request->all());

        //Passa os dados recebidos da tela de cadastro para o controller de usuários
        $usuario = new Usuario();
        $usuario->nome = $request->nome ." ".$request->sobrenome;
        $usuario->cpf = $request->cpf;
        $usuario->sexo = $request->sexo;
        $usuario->telefone = $request->telefone;
        $usuario->login_id = $login->id;
        
        $this->usuario_controller->cadastrarUsuario($usuario);

        return redirect("/")->with("message", "Usuario criado com sucesso!");
    }

    //Valida dados inseridos no formulário de cadastro.
    public function validacao($data){
        if(array_key_exists('nome', $data) && array_key_exists('cpf', $data) 
        && array_key_exists('sexo', $data) && array_key_exists('telefone', $data))
        {
            if($data['nome'] || $data['cpf'] || $data['sexo'] || $data['telefone']){
                $regras['nome'] = 'required|min:5'; //Campo nome requerido e deve conter no mínimo 5 digitos;
                $regras['sobrenome'] = 'required|min:5';
                $regras['cpf'] = 'required|size:11'; //CPF requerido e deve conter somente 11 digitos;
                $regras['sexo'] = 'required'; //Sexo requerido;
                $regras['telefone'] = 'required|min:8'; //Telefone requerido e deve conter no minimo 8 digitos;
            }
        }

        $regras['email'] = 'required|email'; //Verifica o preenchimento do e-mail e se o e-mail é valido.
        $regras['password'] = 'required';
        $regras['confirmasenha'] = 'required|same:password'; //Verifica o preenchimento da confirmação de senha e se é igual ao campo senha;

        $mensagens = [
            'nome.required' => 'Campo Nome é obrigatório',
            'nome.min' => 'Campo nome deve conter no minimo 5 caracteres',
            'sobrenome.required' => 'Sobrenome é obrigatório',
            'sobrenome.min' => 'Campo sobrenome deve conter no mínimo 5 caracteres',
            'cpf.required' => 'Campo CPF é obrigatório',
            'cpf.size' => 'Campo CPF deve conter 11 digitos',
            'sexo.required' => 'Obrigatório selecionar o sexo',
            'telefone.required' => 'Campo Telefone obrigatório',
            'telefone.min' => 'Campo Telefone deve conter no mínimo 8 digitos',
            'email.required' => 'Campo email obrigatório',
            'email.email' => 'E-mail inserido invalido',
            'password.required' => 'Campo senha obrigatório',
            'confirmasenha.required' => 'Confirmação de senha necessária',
            'confirmasenha.same' => 'Confirmação de senha difere do campo senha'
        ];

        return Validator::make($data, $regras, $mensagens);
    }
}