<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setor;
use PDF;


class PdfstrController extends Controller
{
    public function geraPdfstr(){

        $set = Setor::all()->sortBy("nome");

        $pdfstr = PDF::loadView('setores.impSTR', compact('set'));
        return $pdfstr->setPaper('a4','landscape')->stream('Setores.pdf');
    }
}
