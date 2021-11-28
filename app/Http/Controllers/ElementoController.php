<?php

namespace App\Http\Controllers;
use App\elemento;
use Illuminate\Http\Request;

class ElementoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function visupdf()
    {
        $elementospdf = elemento::paginate(5);
        return view('elementos.pdfele', compact('elementospdf') );
    }


    public function index()
    {
        $elementos = elemento::paginate(5);
        return view('elementos.index', compact('elementos') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('elementos.create', ['action'=>route('elemento.store'), 'method'=>'post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = $request->get('redirect_to', route('elemento.index'));
        if (! $request->has('cancel') ){
            $dados = $request->all();
            Elemento::create($dados);
            $request->session()->flash('message', 'Elemento cadastrado com sucesso');
        }
        else{ 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
         return redirect()->to($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Elemento  $elemento
     * @return \Illuminate\Http\Response
     */
    public function show(Elemento $elemento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Elemento  $elemento
     * @return \Illuminate\Http\Response
     */
    public function edit(Elemento $elemento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Elemento  $elemento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, elemento $elemento)
    {
        if (! $request->has('cancel') )
        {
            $elemento->nome = $request->input('nome');
            $elemento->valor = $request->input('valor');
            $elemento->update();
            \Session::flash('message', 'Elemento atualizada com sucesso!');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('elemento.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Elemento  $elemento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Elemento $elemento, Request $request)
    {
        if (! $request->has('cancel') ){
            $elemento->delete();
            \Session::flash('message', 'Elemento excluída com sucesso!');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('elemento.index'); 
    }
}
