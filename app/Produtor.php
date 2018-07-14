<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtor extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'cnpj',
        'endereco_id',
        'login_id'
    ];

    protected $table = 'produtores';

    public function endereco(){
        return $this->hasMany(Produtor::class, "produtor_id");
    }
}