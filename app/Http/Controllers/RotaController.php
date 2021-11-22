<?php

namespace App\Http\Controllers;

use App\rota;
use Illuminate\Http\Request;

class RotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function visupdf()
    {
        $rotaspdf = Rota::paginate(5);
        return view('rotas.pdfROT', compact('rotaspdf') );
    }

    public function index()
    {
        $rotas = Rota::all()->Sortby('usuario');
        return view('rotas.index', compact('rotas') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rotas.create', ['action'=>route('rota.store'), 'method'=>'post']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = $request->get('redirect_to', route('rota.index'));
        if (! $request->has('cancel') ){
            $rotas = $request->all();
            Rota::create($rotas);
            $request->session()->flash('message', 'Rota cadastrada com sucesso');
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
     * @param  \App\rota  $rota
     * @return \Illuminate\Http\Response
     */
    public function show(rota $rota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rota  $rota
     * @return \Illuminate\Http\Response
     */
    public function edit(rota $rota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rota  $rota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rota $rota)
    {
        if (! $request->has('cancel') ){
            $rota->usuario = $request->input('usuario');
            $rota->ponto_alocado = $request->input('ponto_alocado');
            $rota->ponto_alocado_atual = $request->input('ponto_alocado_atual');
            $rota->setor_ponto = $request->input('setor_ponto');
            $rota->update();
            \Session::flash('message', 'Rota atualizada com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('rota.index');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rota  $rota
     * @return \Illuminate\Http\Response
     */
    public function destroy(rota $rota, Request $request)
    {
        if (! $request->has('cancel') ){
            $rota->delete();
            \Session::flash('message', 'Rota excluída com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('rota.index');

    }
}
