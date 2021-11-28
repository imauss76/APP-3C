<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tecnico extends Model
{
    protected $fillable = [
        'id',
        'matricula',
        'nome',
        'funcao'
    ];
    
    public function usertec()
        {
        return $this->belongsTo('App\User','nome','id');
        }       
}
