<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Admin as Authenticatable;

class Admin extends Model
{
    protected $fillable = [
        'id',
        'email',
        'senha',
        'nome',
        'telefone'
    ];

    protected $table = 'adm_administrador';
}