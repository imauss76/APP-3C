<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvacuacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evacuacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data_evacuacao');
            $table->bigInteger('relator')->unsigned();
            $table->foreign('relator')
            ->references('id')
            ->on('users')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->string('turno');
            $table->integer('setor_sinistro')->unsigned();
            $table->foreign('setor_sinistro')
            ->references('id')
            ->on('setors')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->text('causa_sinistro');
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->text('descricao_evacuacao');
            $table->text('pontos_positivos');
            $table->text('pontos_negativos');

            $table->rememberToken();
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
        Schema::dropIfExists('evacuacaos');
    }
}
