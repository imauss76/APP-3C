<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SolicitarAcessoInterno;
use PDF;

class PdfuiController extends Controller
{
    public function geraPdfui(){

        $ui = SolicitarAcessoInterno::all()->sortBy("setor_alocado");

        $pdfui = PDF::loadView('AcessosInternos.impSAI', compact('ui'));
        return $pdfui->setPaper('a4','landscape')->stream('Usuarios_Internos.pdf');
    }
}