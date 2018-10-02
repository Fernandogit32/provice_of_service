<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Endereco;

class Cliente extends Model
{
    protected $fillable =[
    'telefone',
    'celular',
    'user_id',
    'endereco_id',
    
    ];

    public function user(){
        return $this->BelongsTo(User::class , 'user_id');   
       }

       public function endereco(){
        return $this->BelongsTo(User::class , 'endereco_id');   
       }
    
}
