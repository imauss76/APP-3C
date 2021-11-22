<?php

namespace App\Http\Controllers;
use App\setor;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function visupdf()
    {
        $setorespdf = setor::paginate(10);
        return view('setores.pdfSTR', compact('setorespdf') );
    }

    public function index()
    {
        $setores = setor::paginate(5);
        return view('setores.index', compact('setores') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setores.create', ['action'=>route('setor.store'), 'method'=>'post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = $request->get('redirect_to', route('setor.index'));
    if (! $request->has('cancel') ){
        $dados = $request->all();
        Setor::create($dados);
        $request->session()->flash('message', 'Setor cadastrado com sucesso');
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
     * @param  \App\setor  $setor
     * @return \Illuminate\Http\Response
     */
    public function show(setor $setor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\setor  $setor
     * @return \Illuminate\Http\Response
     */
    public function edit(setor $setor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\setor  $setor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, setor $setor)
    {
        if (! $request->has('cancel') ){
            $setor->nome = $request->input('nome');
            $setor->usuario_responsavel = $request->input('usuario_responsavel');
            $setor->descricao = $request->input('descricao');
            $setor->update();
            \Session::flash('message', 'Setor atualizado com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('setor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\setor  $setor
     * @return \Illuminate\Http\Response
     */
    public function destroy(setor $setor, Request $request)
    {
        if (! $request->has('cancel') ){
            $setor->delete();
            \Session::flash('message', 'Setor excluído com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('setor.index');
    }
}
