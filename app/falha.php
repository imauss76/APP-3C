<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Falha extends Model
{
    protected $fillable = [
        'id',
        'origem',
        'elemento',
        'descricao'
    ];
    
    public function elementoFal()
    {
    return $this->belongsTo('App\Elemento','elemento','id');
    }
}
