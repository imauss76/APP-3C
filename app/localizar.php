<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class localizar extends Model
{
    protected $fillable = [
        'id',
        'usuario',
        'ponto_localizado',
        'setor_localizado'
    ];
    public function userloc()
    {
        return $this->belongsTo('App\User','usuario','id');
    }
    public function pmloc()
    {
        return $this->belongsTo('App\pontoMonitorado','ponto_localizado','id');
    }
    public function setorloc()
    {
        return $this->belongsTo('App\setor','setor_localizado','id');
    }

}
