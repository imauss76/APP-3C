<?php

namespace App\Http\Controllers;
use App\falha;
use Illuminate\Http\Request;

class FalhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function visupdf()
    {
        $falhaspdf = falha::paginate(5);
        return view('falhas.pdffal', compact('falhaspdf') );
    }


    public function index()
    {
        $falhas = falha::paginate(5);
        return view('falhas.index', compact('falhas') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('falhas.create', ['action'=>route('falha.store'), 'method'=>'post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = $request->get('redirect_to', route('falha.index'));
        if (! $request->has('cancel') ){
            $dados = $request->all();
            Falha::create($dados);
            $request->session()->flash('message', 'Falha cadastrada com sucesso');
        }
        else{ 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
         return redirect()->to($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Falha  $falha
     * @return \Illuminate\Http\Response
     */
    public function show(Falha $falha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Falha  $falha
     * @return \Illuminate\Http\Response
     */
    public function edit(Falha $falha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Falha  $falha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, falha $falha)
    {
        if (! $request->has('cancel') )
        {
            $falha->origem = $request->input('origem');
            $falha->elemento = $request->input('elemento');
            $falha->descricao = $request->input('descricao');
            $falha->update();
            \Session::flash('message', 'Falha atualizada com sucesso!');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('falha.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Falha  $falha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Falha $falha, Request $request)
    {
        if (! $request->has('cancel') ){
            $falha->delete();
            \Session::flash('message', 'Falha excluída com sucesso!');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('falha.index'); 
    }
}
