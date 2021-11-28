<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('sobre', function () {
    return view('sobre');
});

Auth::routes();

Route::middleware('auth')->group(function(){

    Route::resource('/inicio', 'InicioController');

    Route::resource('/Setor', 'SetorController');

    Route::resource('/Motor', 'MotorController');

    Route::resource('/Tecnico', 'TecnicoController');

    Route::resource('/falha', 'FalhaController');

    Route::resource('/elemento', 'ElementoController');

    Route::resource('/corretiva', 'CorretivaController');

    /** Rotas para GERAÇÃO DE ARQUIVOS PDF */

    Route::get('pdfmtr', 'PdfmtrController@geraPdfmtr'); // GERAR PDF DE REGISTROS DE MOTORES

    Route::get('visupdfmtr', 'MotorController@visupdf'); // VISUALIZA OS MOTORES

    Route::get('pdfstr', 'PdfstrController@geraPdfstr'); // GERAR PDF DE SETORES

    Route::get('visupdfstr', 'SetorController@visupdf'); // VISUALIZA OS SETORES

    Route::get('pdftec', 'PdftecController@geraPdftec'); // GERAR PDF DE TECNICOS

    Route::get('visupdftec', 'TecnicoController@visupdf'); // VISUALIZA OS TECNICOS

    Route::get('pdffal', 'PdffalController@geraPdffal'); // GERAR PDF DE FALHAS

    Route::get('visupdffal', 'FalhaController@visupdf'); // VISUALIZA AS FALHAS

    Route::get('pdfele', 'PdfeleController@geraPdfele'); // GERAR PDF DE ELEMENTOS

    Route::get('visupdfele', 'ElementoController@visupdf'); // VISUALIZA OS ELEMENTOS

    Route::get('pdfcor', 'PdfcorController@geraPdfcor'); // GERAR PDF DE CORRETIVAS

    Route::get('visupdfcor', 'CorretivaController@visupdf'); // VISUALIZA OS CORRETIVAS



    //Route::get('pdfev', 'PdfevController@geraPdfev'); // GERAR PDF DE REGISTROS DE EVACUAÇÕES
});

// CONTROLE DE ACESSOS

Route::middleware('admin')->group(function(){

    Route::resource('/setor', 'SetorController');

    Route::resource('/Motor', 'MotorController');

    Route::resource('/tecnico', 'TecnicoController');

    Route::resource('/falha', 'FalhaController');

    Route::resource('/elemento', 'ElementoController');

    Route::resource('/corretiva', 'CorretivaController');

});


Route::get('/home', 'HomeController@index')->name('home');

/** Rotas para INICIO */

/** Rotas para SETORES */

Route::resource('/setor', 'SetorController')->Middleware('auth');

Route::get('/setor/delete/{setor}', function (App\setor $setor) {
    return view('setores.destroy', ['str' => $setor]);
})->name('setor.delete');

Route::get('/setor/edit/{setor}', function (App\setor $setor) {
    return view('setores.edit', ['str' => $setor]);
})->name('setor.edit');

/** Rotas para MOTORES */

Route::get('/Motor/delete/{Motor}', function (App\Motor $Motor) {
    return view('Motores.destroy', ['mtr' => $Motor]);
})->name('Motor.delete');

Route::get('/Motor/edit/{Motor}', function (App\Motor $Motor) {
    return view('Motores.edit', ['mtr' => $Motor]);
})->name('Motor.edit');

/** Rotas para TECNICOS */

Route::get('/tecnico/delete/{tecnico}', function (App\tecnico $tecnico) {
    return view('tecnicos.destroy', ['tec' => $tecnico]);
})->name('tecnico.delete');

Route::get('/tecnico/edit/{tecnico}', function (App\tecnico $tecnico) {
    return view('tecnicos.edit', ['tec' => $tecnico]);
})->name('tecnico.edit');

/** Rotas para FALHAS */

Route::get('/falha/delete/{falha}', function (App\falha $falha) {
    return view('falhas.destroy', ['fal' => $falha]);
})->name('falha.delete');

Route::get('/falha/edit/{falha}', function (App\falha $falha) {
    return view('falhas.edit', ['fal' => $falha]);
})->name('falha.edit');

/** Rotas para ELEMENTOS */

Route::get('/elemento/delete/{elemento}', function (App\elemento $elemento) {
    return view('elementos.destroy', ['ele' => $elemento]);
})->name('elemento.delete');

Route::get('/elemento/edit/{elemento}', function (App\elemento $elemento) {
    return view('elementos.edit', ['ele' => $elemento]);
})->name('elemento.edit');

/** Rotas para CORRETIVAS */

Route::get('/corretiva/delete/{corretiva}', function (App\corretiva $corretiva) {
    return view('corretivas.destroy', ['cor' => $corretiva]);
})->name('corretiva.delete');

Route::get('/corretiva/edit/{corretiva}', function (App\corretiva $corretiva) {
    return view('corretivas.edit', ['cor' => $corretiva]);
})->name('corretiva.edit');
