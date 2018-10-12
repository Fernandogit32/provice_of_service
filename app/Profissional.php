<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $fillable = [
        'telefone',
        'celular',
        'profissao',
        'descricao',
        'media',
        'user_id',
    ];

    public function user()
    {
        return $this->BelongsTo(User::class, 'user_id');
    }
}
