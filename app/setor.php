<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setor extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'usuario_responsavel',
        'descricao'
    ];

    public function userstr()
    {
        return $this->belongsTo('App\User','usuario_responsavel','id');
    }
   }
