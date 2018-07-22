<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renda extends Model
{
    protected $fillable = [
        'id',
        'mes',
        'total',
        'lucro'
    ];

    protected $table = 'produtor_renda';
}
