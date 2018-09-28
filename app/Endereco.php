<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillble =[
        'cidade',
        'bairro',
        'rua',
        'numero',
    ];
}
