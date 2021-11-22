<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rota;
use PDF;


class PdfrotController extends Controller
{
    public function geraPdfrot(){

        $rot = Rota::all()->sortby('usuario');
    
        $pdfrot = PDF::loadView('Rotas.impROT', compact('rot'));
        return $pdfrot->setPaper('a4','landscape')->stream('Rota dos Usuários.pdf');
    }
}
