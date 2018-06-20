<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'id',
        'rua',
        'bairro',
        'cep',
        'numero',
        'cidade',
        'estado',
        'complemento',
        'zona'
    ];

    protected $table = 'consumidor_endereco';

    public function produtor(){
        return $this->belongsTo(Produtor::class, "produtor_id");
    }
}