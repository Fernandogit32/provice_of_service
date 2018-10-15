<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
   protected $fillable =[
    'descricao',
    'status',
    'user_id',
    'autonomo_id',
   ];
}
