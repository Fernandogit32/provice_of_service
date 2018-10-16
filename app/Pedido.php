<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
   protected $fillable =[
    'descricao',
    'status',
    'cliente_id',
    'autonomo_id',
   ];  

}
