<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\falha;
use PDF;


class PdffalController extends Controller
{
    public function geraPdffal(){

        $fal = Falha::all()->sortby('origem');
    
        $pdffal = PDF::loadView('Falhas.impFAL', compact('fal'));
        return $pdffal->setPaper('a4','landscape')->stream('Lista de Falhas.pdf');
    }
}
