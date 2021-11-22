<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTecnicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**este formulario será preenchido pelo 'admin'
     * apos este realizar login do usuario interno
    */
    public function up() 
    {
        Schema::create('tecnicos', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();

            $table->String('matricula');

            $table->bigInteger('nome')->unsigned();
            $table->foreign('nome')
            ->references('id')
            ->on('users')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->String('funcao');
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
        Schema::dropIfExists('tecnicos');
    }
}
