<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorretivasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('corretivas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data_corretiva');
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->bigInteger('relator')->unsigned();
            $table->foreign('relator')
            ->references('id')
            ->on('users')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->integer('setor')->unsigned();
            $table->foreign('setor')
            ->references('id')
            ->on('setors')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->String('motor');
            $table->String('elemento');
            $table->String('falha');

            $table->text('descricao_causa');
            $table->text('descricao_corretiva');
            $table->String('acao_bloqueio');

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
        Schema::dropIfExists('corretivas');
    }
}
