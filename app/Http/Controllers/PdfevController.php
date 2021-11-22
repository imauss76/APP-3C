<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evacuacao;
use PDF;

class PdfevController extends Controller
{
    public function geraPdfev(){

        $ev = Evacuacao::all()->sortBy("data_evacuacao");

        $pdfev = PDF::loadView('Evacuacao.impEV', compact('ev'));
        return $pdfev->setPaper('a4','landscape', 'L')->stream('Evacuações.pdf');
    }

}
