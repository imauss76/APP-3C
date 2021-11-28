<?php

namespace App\Http\Controllers;

use App\Corretiva;
use Illuminate\Http\Request;

class CorretivaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function visupdf()
    {
        $corretivaspdf = Corretiva::paginate(5);
        return view('corretivas.pdfCOR', compact('corretivaspdf') );
    }

    public function index()
    {
        $corretivas = Corretiva::paginate(5);
        return view('corretivas.index', compact('corretivas') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('corretivas.create', ['action'=>route('corretiva.store'), 'method'=>'post']);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = $request->get('redirect_to', route('corretiva.index'));
        if (! $request->has('cancel') ){
            $cor = $request->all();


            Corretiva::create($cor);
            $request->session()->flash('message', 'Registrada a Corretiva com sucesso');
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
     * @param  \App\Corretiva  $corretiva
     * @return \Illuminate\Http\Response
     */
    public function show(Corretiva $corretiva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Corretiva  $corretiva
     * @return \Illuminate\Http\Response
     */
    public function edit(Corretiva $corretiva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Corretiva  $corretiva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Corretiva $corretiva)
    {
                
        if (! $request->has('cancel') ){
            $corretiva->data_corretiva = $request->input('data_corretiva');
            $corretiva->hora_inicio = $request->input('hora_inicio');
            $corretiva->hora_final = $request->input('hora_final');
            $corretiva->relator = $request->input('relator');
            $corretiva->setor = $request->input('setor');
            $corretiva->motor = $request->input('motor');
            $corretiva->elemento = $request->input('elemento');
            $corretiva->falha = $request->input('falha');
            $corretiva->descricao_causa = $request->input('descricao_causa');
            $corretiva->descricao_corretiva = $request->input('descricao_corretiva');
            $corretiva->acao_bloqueio = $request->input('acao_bloqueio');
            $corretiva->update();
            \Session::flash('message', 'Corretiva atualizada com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('corretiva.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Corretiva  $corretiva
     * @return \Illuminate\Http\Response
     */
    public function destroy(corretiva $corretiva, Request $request)
    {
        if (! $request->has('cancel') ){
            $corretiva->delete();
            \Session::flash('message', 'Registro excluído com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('corretiva.index'); 
    }
}
