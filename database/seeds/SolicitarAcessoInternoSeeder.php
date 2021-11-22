<?php

use Illuminate\Database\Seeder;
use\App\SolicitarAcessoInterno;

class SolicitarAcessoInternoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET foreign_key_checks = 0;');

        $sai0 = new SolicitarAcessoInterno();

        $sai0->usuario_interno = '10';
        $sai0->matricula = '001';
        $sai0->setor_alocado = '2';
        $sai0->data_nasc = '1976-12-05';
        $sai0->pessoa_contato = 'PESSOA 001';
        $sai0->tel_pessoa_contato = '54-3282.4001';
        $sai0->fator_rh = 'AB-'; 
        $sai0->contra_indicacao = 'NENHUMA.';
        $sai0->save();

        
        $sai1 = new SolicitarAcessoInterno();

        $sai1->usuario_interno = '02';
        $sai1->matricula = '002';
        $sai1->setor_alocado = '8';
        $sai1->data_nasc = '1990-10-09';
        $sai1->pessoa_contato = 'PESSOA 002';
        $sai1->tel_pessoa_contato = '54-3282.4002';
        $sai1->fator_rh = 'A-'; 
        $sai1->contra_indicacao = 'TODAS.';
        $sai1->save();

        
        $sai2 = new SolicitarAcessoInterno();

        $sai2->usuario_interno = '03';
        $sai2->matricula = '003';
        $sai2->setor_alocado = '5';
        $sai2->data_nasc = '1950-03-25';
        $sai2->pessoa_contato = 'PESSOA 003';
        $sai2->tel_pessoa_contato = '54-3282.1001';
        $sai2->fator_rh = 'O-'; 
        $sai2->contra_indicacao = 'TUDO E MAIS UM POUCO.';
        $sai2->save();

        
        $sai3 = new SolicitarAcessoInterno();

        $sai3->usuario_interno = '04';
        $sai3->matricula = '004';
        $sai3->setor_alocado = '3';
        $sai3->data_nasc = '2000-06-15';
        $sai3->pessoa_contato = 'PESSOA 004';
        $sai3->tel_pessoa_contato = '54-3282.3501';
        $sai3->fator_rh = 'AB+'; 
        $sai3->contra_indicacao = 'NENHUMA.';
        $sai3->save();

        DB::statement('SET foreign_key_checks = 1;');


    }
}
