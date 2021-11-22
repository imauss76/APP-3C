<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Localizar;
use PDF;


class PdflocController extends Controller
{
    public function geraPdfloc(){

        $loc = Localizar::all();
    
        $pdfloc = PDF::loadView('Localizacao.impLOC', compact('loc'));
        return $pdfloc->setPaper('a4','landscape')->stream('Localização dos Usuários.pdf');
    }
}
