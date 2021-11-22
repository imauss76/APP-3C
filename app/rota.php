<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rota extends Model
{
    protected $fillable = [
        'id',
        'usuario',
        'ponto_alocado',
        'ponto_alocado_atual',
        'setor_ponto'
    ];
    public function userot()
    {
        return $this->belongsTo('App\User','usuario','id');
    }
    public function paRota()
    {
        return $this->belongsTo('App\pontoMonitorado','ponto_alocado','id');
    }
    public function paaRota()
    {
        return $this->belongsTo('App\pontoMonitorado','ponto_alocado_atual','id');
    }
    public function setorEvac()
    {
    return $this->belongsTo('App\Setor','setor_ponto','id');
    }


}
