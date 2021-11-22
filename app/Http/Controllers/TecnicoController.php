<?php

namespace App\Http\Controllers;
use App\Tecnico;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function visupdf()
    {
        $Tecnicopdf = Tecnico::paginate(5);
        return view('Tecnicos.pdftec', compact('Tecnicopdf') );
    }


    public function index()
    {
        $tecnicos = Tecnico::paginate(5);
        return view('tecnicos.index', compact('tecnicos') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tecnicos.create', ['action'=>route('Tecnico.store'), 'method'=>'post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = $request->get('redirect_to', route('tecnicos.index'));
        if (! $request->has('cancel') ){
            $dados = $request->all();
            Tecnico::create($dados);
            $request->session()->flash('message', 'Técnico cadastro com sucesso');
        }
        else{ 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
         return redirect()->to($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function show(Tecnico $tecnico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function edit(Tecnico $tecnico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tecnico $tecnico)
    {
        if (! $request->has('cancel') )
        {
            $tecnico->matricula = $request->input('matricula');
            $tecnico->nome = $request->input('nome');
            $tecnico->funcao = $request->input('funcao');
            $tecnico->update();
            \Session::flash('message', 'Técnico atualizado com sucesso!');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('tecnicos.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tecnico $tecnico, Request $request)
    {
        if (! $request->has('cancel') ){
            $tecnico->delete();
            \Session::flash('message', 'Solicitação excluída com sucesso!');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('tecnicos.index'); 
    }
}
