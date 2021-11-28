<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tecnico;
use PDF;


class PdftecController extends Controller
{
    public function geraPdftec(){

        $tec = Tecnico::all()->sortby('nome');
    
        $pdftec = PDF::loadView('Tecnicos.impTEC', compact('tec'));
        return $pdftec->setPaper('a4','landscape')->stream('Lista de Técnicos.pdf');
    }
}
