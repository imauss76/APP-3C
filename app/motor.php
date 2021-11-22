<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $fillable = [
        'id',
        'tag',
        'potencia',
        'polos',
        'carcaca',
        'fabricante',
        'setor'
    ];

    public function setormtr()
    {
        return $this->belongsTo('App\Setor','setor','id');
    }
}
