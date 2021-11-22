<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitarAcessoExternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /** Os campos 'nome - matricula - email' serão auto preenchidos
     *  através do login do usuario externo */

    public function up()
    {
        Schema::create('solicitar_acesso_externos', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->integer('setor')->unsigned();
            $table->foreign('setor')
            ->references('id')
            ->on('setors')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->bigInteger('anfitriao')->unsigned();
            $table->foreign('anfitriao')
            ->references('id')
            ->on('solicitar_acesso_internos')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->date('data_entrada');
            $table->date('data_saida');

            $table->bigInteger('usuario_visitante')->unsigned();
            $table->foreign('usuario_visitante')
            ->references('id')
            ->on('users')
            ->onDelete('no action')
            ->onUpdate('no action');



            $table->string('matricula');            
            $table->date('data_nasc');
            $table->string('cpf')->unique();
            $table->string('pessoa_contato');
            $table->string('tel_pessoa_contato');
            $table->string('fator_rh');// campo não obrigatório
            $table->text('contra_indicacao');// campo não obrigatório
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitar_acesso_externos');
    }
}
