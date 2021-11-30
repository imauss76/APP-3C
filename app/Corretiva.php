<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corretiva extends Model
{
    protected $fillable = [
        'id',
        'data_corretiva',
        'hora_inicio',
        'hora_final',
        'relator',
        'setor',
        'motor',
        'elemento',
        'falha',
        'custo',
        'descricao_causa',
        'descricao_corretiva',
        'acao_bloqueio'
    ];

    public function userCor()
    {
        return $this->belongsTo('App\User','relator','id');
    }

    public function setorCor()
    {
    return $this->belongsTo('App\Setor','setor','id');
    }

    public function motorCor()
    {
    return $this->belongsTo('App\Motor','motor','id');
    }

    public function elementoCor()
    {
    return $this->belongsTo('App\Elemento','elemento','id');
    }
    public function falhaCor()
    {
    return $this->belongsTo('App\Falha','falha','id');
    }


}
