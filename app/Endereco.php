<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;

class Endereco extends Model
{
    protected $fillable =[
        'cidade',
        'bairro',
        'rua',
        'numero',
    ];
    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'endereco_id');
    }
}
