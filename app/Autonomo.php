<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autonomo extends Model
{
    protected $fillable = [
        'telefone',
        'celular',
        'profissao',
        'descricao',       
        'foto',       
        'user_id',
    ];
    
    public function user(){
        return $this->BelongsTo(User::class , 'user_id');   
       }

}
