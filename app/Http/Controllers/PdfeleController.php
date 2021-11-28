<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\elemento;
use PDF;


class PdfeleController extends Controller
{
    public function geraPdfele(){

        $ele = Elemento::all()->sortby('nome');
    
        $pdfele = PDF::loadView('Elementos.impELE', compact('ele'));
        return $pdfele->setPaper('a4','landscape')->stream('Lista de Elementos.pdf');
    }
}
