<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mOTOR;
use PDF;


class PdfmtrController extends Controller
{
    public function geraPdfmtr(){

        $mtr = Motor::all()->sortBy("id");

        $pdfmtr = PDF::loadView('motores.impMTR', compact('mtr'));
        return $pdfmtr->setPaper('a4','landscape')->stream('Motores.pdf');
    }
}
