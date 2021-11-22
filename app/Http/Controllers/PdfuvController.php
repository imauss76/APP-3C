<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SolicitarAcessoExterno;
use PDF;

class PdfuvController extends Controller
{
    public function geraPdfuv(){

        $uv = SolicitarAcessoExterno::all()->sortBy("setor");

        $pdfuv = PDF::loadView('AcessosExternos.impSAE', compact('uv'));
        return $pdfuv->setPaper('a4','landscape')->stream('Usuarios_Externos.pdf');
    }
}
