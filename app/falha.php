<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class falha extends Model
{
    protected $fillable = [
        'id',
        'origem',
        'elemento',
        'descricao'
    ];
    
    public function elementoFal()
    {
    return $this->belongsTo('App\elemento','elemento','id');
    }
}
