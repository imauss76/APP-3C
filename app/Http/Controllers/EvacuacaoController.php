<?php

namespace App\Http\Controllers;

use App\Evacuacao;
use Illuminate\Http\Request;

class EvacuacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function visupdf()
    {
        $evacuacoespdf = Evacuacao::paginate(5);
        return view('evacuacao.pdfev', compact('evacuacoespdf') );
    }


    public function index()
    {
        $evacuacoes = Evacuacao::paginate(5);
        return view('evacuacao.index', compact('evacuacoes') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evacuacao.create', ['action'=>route('evacuacao.store'), 'method'=>'post']);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = $request->get('redirect_to', route('evacuacao.index'));
        if (! $request->has('cancel') ){
            $eva = $request->all();
            Evacuacao::create($eva);
            $request->session()->flash('message', 'Registrada a Evacuação com sucesso');
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
     * @param  \App\Evacuacao  $evacuacao
     * @return \Illuminate\Http\Response
     */
    public function show(Evacuacao $evacuacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evacuacao  $evacuacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Evacuacao $evacuacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evacuacao  $evacuacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evacuacao $evacuacao)
    {
        if (! $request->has('cancel') ){
            $evacuacao->data_evacuacao = $request->input('data_evacuacao');
            $evacuacao->relator = $request->input('relator');
            $evacuacao->turno = $request->input('turno');
            $evacuacao->setor_sinistro = $request->input('setor_sinistro');
            $evacuacao->causa_sinistro = $request->input('causa_sinistro');
            $evacuacao->hora_inicio = $request->input('hora_inicio');
            $evacuacao->hora_final = $request->input('hora_final');
            $evacuacao->descricao_evacuacao = $request->input('descricao_evacuacao');
            $evacuacao->pontos_positivos = $request->input('pontos_positivos');
            $evacuacao->pontos_negativos = $request->input('pontos_negativos');
            $evacuacao->update();
            \Session::flash('message', 'Equipamento atualizado com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('evacuacao.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evacuacao  $evacuacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(evacuacao $evacuacao, Request $request)
    {
        if (! $request->has('cancel') ){
            $evacuacao->delete();
            \Session::flash('message', 'Registro excluído com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('evacuacao.index'); 
    }
}
