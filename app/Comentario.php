<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'id',
        'feedback'
    ];

    protected $table = 'produtor_comentario';
}
