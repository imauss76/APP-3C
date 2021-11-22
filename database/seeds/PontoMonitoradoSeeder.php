<?php

use Illuminate\Database\Seeder;
use\App\PontoMonitorado;

class PontoMonitoradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::statement('SET foreign_key_checks = 0;');

        $pto0 = new PontoMonitorado();

        $pto0->ponto_encontro = 'Não';
        $pto0->setor = '1';
        $pto0->descricao = 'DESCRIÇÃO DO PONTO 001';
        $pto0->save();

        $pto1 = new PontoMonitorado();

        $pto1->ponto_encontro = 'Não';
        $pto1->setor = '2';
        $pto1->descricao = 'DESCRIÇÃO DO PONTO 002';
        $pto1->save();

        $pto2= new PontoMonitorado();

        $pto2->ponto_encontro = 'Não';
        $pto2->setor = '3';
        $pto2->descricao = 'DESCRIÇÃO DO PONTO 003';
        $pto2->save();

        $pto3 = new PontoMonitorado();

        $pto3->ponto_encontro = 'Não';
        $pto3->setor = '4';
        $pto3->descricao = 'DESCRIÇÃO DO PONTO 004';
        $pto3->save();

        $pto4 = new PontoMonitorado();

        $pto4->ponto_encontro = 'Sim';
        $pto4->setor = '5';
        $pto4->descricao = 'DESCRIÇÃO DO PONTO 005';
        $pto4->save();

        $pto5 = new PontoMonitorado();

        $pto5->ponto_encontro = 'Não';
        $pto5->setor = '6';
        $pto5->descricao = 'DESCRIÇÃO DO PONTO 006';
        $pto5->save();

        $pto6 = new PontoMonitorado();

        $pto6->ponto_encontro = 'Não';
        $pto6->setor = '1';
        $pto6->descricao = 'DESCRIÇÃO DO PONTO 007';
        $pto6->save();

        $pto7 = new PontoMonitorado();

        $pto7->ponto_encontro = 'Não';
        $pto7->setor = '2';
        $pto7->descricao = 'DESCRIÇÃO DO PONTO 008';
        $pto7->save();

        $pto8 = new PontoMonitorado();

        $pto8->ponto_encontro = 'Não';
        $pto8->setor = '3';
        $pto8->descricao = 'DESCRIÇÃO DO PONTO 009';
        $pto8->save();

        $pto9 = new PontoMonitorado();

        $pto9->ponto_encontro = 'Sim';
        $pto9->setor = '4';
        $pto9->descricao = 'DESCRIÇÃO DO PONTO 010';
        $pto9->save();

        DB::statement('SET foreign_key_checks = 1;');

    }
}
