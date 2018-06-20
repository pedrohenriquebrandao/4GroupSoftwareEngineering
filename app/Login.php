<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Usuario as Authenticatable;

class Login extends Model
{
    protected $fillable = [
        'email',
        'senha'
    ];

    protected $table = 'consumidor_login';
}