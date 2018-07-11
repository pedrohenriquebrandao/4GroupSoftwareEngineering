<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Login as Authenticatable;
use Auth;

class Login extends Authenticatable
{
    use Notifiable; //Necessário para autenticação(Login)

    protected $guard = 'usuario';

    protected $fillable = [
        'email',
        'password'
    ];

    protected $table = 'consumidor_login';
}