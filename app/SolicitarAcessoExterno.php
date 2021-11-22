<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitarAcessoExterno extends Model
{
    protected $fillable = [

        'id',
        'setor',
        'anfitriao',
        'data_entrada',
        'data_saida',
        'usuario_visitante',
        'matricula',
        'data_nasc',
        'cpf',
        'pessoa_contato',
        'tel_pessoa_contato',
        'fator_rh',
        'contra_indicacao'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','usuario_visitante','id');
    }

    public function setor1()
    {
    return $this->belongsTo('App\Setor','setor','id');
    }

    public function visit()
    {
        return $this->belongsTo('App\User','anfitriao','id');
    }

   
}
