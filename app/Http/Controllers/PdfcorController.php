<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corretiva;
use PDF;

class PdfcorController extends Controller
{
    public function geraPdfcor(){

        $cor = Corretiva::all()->sortBy("data_corretiva");

        $pdfcor = PDF::loadView('Corretivas.impCOR', compact('cor'));
        return $pdfcor->setPaper('a4','landscape')->stream('Corretivas.pdf');
    }

}
