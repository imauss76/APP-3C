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


Route::get('teste', function () {
    $dados = DB::table('setors')->get();
    dd($dados);
});


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

    /** Rotas para GERAÇÃO DE ARQUIVOS PDF */





    Route::get('pdfmtr', 'PdfmtrController@geraPdfmtr'); // GERAR PDF DE REGISTROS DE PONTOS MONITORADOS

    Route::get('visupdfmtr', 'MotorController@visupdf'); // VISUALIZA OS PONTOS MONITORADOS

    Route::get('pdfstr', 'PdfstrController@geraPdfstr'); // GERAR PDF DE SETORES

    Route::get('visupdfstr', 'SetorController@visupdf'); // VISUALIZA OS SETORES

    Route::get('pdfev', 'PdfevController@geraPdfev'); // GERAR PDF DE REGISTROS DE EVACUAÇÕES

});

// CONTROLE DE ACESSOS

Route::middleware('admin')->group(function(){

    Route::resource('/setor', 'SetorController');

    Route::resource('/Motor', 'MotorController');

    Route::resource('/Tecnico', 'TecnicoController');

    Route::get('visupdfstr', 'SetorController@visupdf'); // VISUALIZA OS SETORES

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
    return view('acessosInternos.edit', ['sai' => $tecnico]);
})->name('tecnico.edit');


/** Rotas para GERAÇÃO DE ARQUIVOS TXT */

Route::get('histUI', function () {
    return view('histUI');
});

Route::get('histUV', function () {
    return view('histUV');
});

Route::get('histPUI', function () {
    return view('histPUI');
});
