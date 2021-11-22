<?php

use Illuminate\Database\Seeder;
use\App\Setor;

class SetorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::statement('SET foreign_key_checks = 0;');

        $setor0 = new Setor();

        $setor0->nome = 'SETOR 001';
        $setor0->descricao = 'DESCRIÇÃO DO SETOR 001';
        $setor0->save();

        $setor1 = new Setor();

        $setor1->nome = 'SETOR 002';
        $setor1->descricao = 'DESCRIÇÃO DO SETOR 002';
        $setor1->save();

        $setor2 = new Setor();

        $setor2->nome = 'SETOR 003';
        $setor2->descricao = 'DESCRIÇÃO DO SETOR 003';
        $setor2->save();

        $setor3 = new Setor();

        $setor3->nome = 'SETOR 004';
        $setor3->descricao = 'DESCRIÇÃO DO SETOR 004';
        $setor3->save();

        $setor4 = new Setor();

        $setor4->nome = 'SETOR 005';
        $setor4->descricao = 'DESCRIÇÃO DO SETOR 005';
        $setor4->save();

        $setor5 = new Setor();

        $setor5->nome = 'SETOR 006';
        $setor5->descricao = 'DESCRIÇÃO DO SETOR 006';
        $setor5->save();

        $setor6 = new Setor();

        $setor6->nome = 'SETOR 007';
        $setor6->descricao = 'DESCRIÇÃO DO SETOR 007';
        $setor6->save();

        $setor7 = new Setor();

        $setor7->nome = 'SETOR 008';
        $setor7->descricao = 'DESCRIÇÃO DO SETOR 008';
        $setor7->save();

        DB::statement('SET foreign_key_checks = 1;');

    }
}
