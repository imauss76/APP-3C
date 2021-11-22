<?php

namespace App\Http\Controllers;

use App\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function visupdf()
    {
        $dadospdf = Motor::paginate(5);
        return view('Motores.pdfMTR', compact('dadospdf') );
    }

     
    public function index()
    {
        $dados = Motor::paginate(5);
        return view('Motores.index', compact('dados') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Motores.create', ['action'=>route('Motor.store'), 'method'=>'post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = $request->get('redirect_to', route('Motor.index'));
    if (! $request->has('cancel') ){
        $dados = $request->all();
        Motor::create($dados);
        $request->session()->flash('message', 'Motor cadastrado com sucesso');
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
     * @param  \App\Motor  $Motor
     * @return \Illuminate\Http\Response
     */
    public function show(Motor $Motor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Motor  $Motor
     * @return \Illuminate\Http\Response
     */
    public function edit(Motor $Motor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Motor  $Motor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motor $Motor)
    {
        if (! $request->has('cancel') ){
            $Motor->tag = $request->input('tag');
            $Motor->potencia = $request->input('potencia');
            $Motor->polos = $request->input('polos');
            $Motor->carcaca = $request->input('carcaca');
            $Motor->fabricante = $request->input('fabricante');
            $Motor->setor = $request->input('setor');
            $Motor->update();
            \Session::flash('message', 'Motor atualizado com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('Motor.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Motor  $Motor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motor $Motor, Request $request)
    {
        if (! $request->has('cancel') ){
            $Motor->delete();
            \Session::flash('message', 'Motor excluído com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('Motor.index'); 
    }
}
