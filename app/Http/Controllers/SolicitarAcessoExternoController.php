<?php

namespace App\Http\Controllers;

use App\SolicitarAcessoExterno;
use Illuminate\Http\Request;

class SolicitarAcessoExternoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function visupdf()
    {
        $AcessosExternospdf = SolicitarAcessoExterno::paginate(5);
        return view('AcessosExternos.pdfSAE', compact('AcessosExternospdf') );

    }


    public function index()
    {
        $AcessosExternos = SolicitarAcessoExterno::paginate(5);
        return view('AcessosExternos.index', compact('AcessosExternos') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AcessosExternos.create', ['action'=>route('solicitarAcessoExterno.store'), 'method'=>'post']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = $request->get('redirect_to', route('solicitarAcessoExterno.index'));
        if (! $request->has('cancel') ){
            $dados = $request->all();
            SolicitarAcessoExterno::create($dados);
            $request->session()->flash('message', 'Acesso Solicitado com sucesso');
        }
        else{ 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
         return redirect()->to($url);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SolicitarAcessoExterno  $solicitarAcessoExterno
     * @return \Illuminate\Http\Response
     */
    public function show(SolicitarAcessoExterno $solicitarAcessoExterno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SolicitarAcessoExterno  $solicitarAcessoExterno
     * @return \Illuminate\Http\Response
     */
    public function edit(SolicitarAcessoExterno $solicitarAcessoExterno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SolicitarAcessoExterno  $solicitarAcessoExterno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SolicitarAcessoExterno $solicitarAcessoExterno)
    {
        if (! $request->has('cancel') ){
            $solicitarAcessoExterno->setor = $request->input('setor');
            $solicitarAcessoExterno->anfitriao = $request->input('anfitriao');
            $solicitarAcessoExterno->data_entrada = $request->input('data_entrada');
            $solicitarAcessoExterno->data_saida = $request->input('data_saida');
            $solicitarAcessoExterno->usuario_visitante = $request->input('usuario_visitante');
            $solicitarAcessoExterno->matricula = $request->input('matricula');
            $solicitarAcessoExterno->data_nasc = $request->input('data_nasc');
            $solicitarAcessoExterno->cpf = $request->input('cpf');
            $solicitarAcessoExterno->pessoa_contato = $request->input('pessoa_contato');
            $solicitarAcessoExterno->tel_pessoa_contato = $request->input('tel_pessoa_contato');
            $solicitarAcessoExterno->fator_rh = $request->input('fator_rh');
            $solicitarAcessoExterno->contra_indicacao = $request->input('contra_indicacao');
            $solicitarAcessoExterno->update();
            \Session::flash('message', 'Solicitação atualizada com sucesso!');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('solicitarAcessoExterno.index'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SolicitarAcessoExterno  $solicitarAcessoExterno
     * @return \Illuminate\Http\Response
     */
    public function destroy(SolicitarAcessoExterno $solicitarAcessoExterno, Request $request)
    {
        if (! $request->has('cancel') ){
            $solicitarAcessoExterno->delete();
            \Session::flash('message', 'Solicitação excluída com sucesso!');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('solicitarAcessoExterno.index'); 

    }
}
