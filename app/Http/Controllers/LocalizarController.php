<?php

namespace App\Http\Controllers;

use App\localizar;
use Illuminate\Http\Request;

class LocalizarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function visupdf()
    {
        $localizacaopdf = Localizar::paginate(5);
        return view('localizacao.pdfloc', compact('localizacaopdf') );
    }

    public function index()
    {
        $localizacoes = Localizar::all();
        return view('Localizacao.index', compact('localizacoes') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Localizacao.create', ['action'=>route('localizacao.store'), 'method'=>'post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = $request->get('redirect_to', route('localizacao.index'));
    if (! $request->has('cancel') ){
        $loc = $request->all();
        Localizar::create($loc);
        $request->session()->flash('message', 'Localização atualizada com sucesso');
    }
    else
    { 
        $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
    }
    return redirect()->to($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\localizar  $localizar
     * @return \Illuminate\Http\Response
     */
    public function show(localizar $localizar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\localizar  $localizar
     * @return \Illuminate\Http\Response
     */
    public function edit(localizar $localizar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\localizar  $localizar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, localizar $localizacao)
    {
        if (! $request->has('cancel') ){
            $localizacao->usuario = $request->input('usuario');
            $localizacao->ponto_localizado = $request->input('ponto_localizado');
            $localizacao->setor_localizado = $request->input('setor_localizado');
            $localizacao->update();
            \Session::flash('message', 'Localização atualizada com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('localizacao.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\localizar  $localizar
     * @return \Illuminate\Http\Response
     */
    public function destroy(localizar $localizacao, Request $request)
    {
        if (! $request->has('cancel') ){
            $localizacao->delete();
            \Session::flash('message', 'Localização excluída com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('localizacao.index'); 
    }
}
