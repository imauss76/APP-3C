<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evacuacao extends Model
{
    protected $fillable = [
        'id',
        'data_evacuacao',
        'relator',
        'turno',
        'setor_sinistro',
        'causa_sinistro',
        'hora_inicio',
        'hora_final',
        'descricao_evacuacao',
        'pontos_positivos',
        'pontos_negativos'
    ];

    public function userEvac()
    {
        return $this->belongsTo('App\User','relator','id');
    }

    public function setorEvac()
    {
    return $this->belongsTo('App\Setor','setor_sinistro','id');
    }

}
