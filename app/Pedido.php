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
   
   public function cliente(){
    return $this->BelongsTo(Cliente::class , 'cliente_id');   
   }
   public function autonomo(){
    return $this->BelongsTo(Autonomo::class , 'autonomo_id');   
   }
  

}
