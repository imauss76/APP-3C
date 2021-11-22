<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   


        Schema::create('setors', function (Blueprint $table) {


            $table->increments('id',10)->unsigned();
            $table->string('nome',50);
            
            $table->bigInteger('usuario_responsavel')->unsigned()->nullable();
            /**
            *$table->foreign('usuario_responsavel')
            *->references('id')
            *->on('solicitar_acesso_internos')
            *->onDelete('no action')
            *->onUpdate('no action');
            */
            $table->String('descricao');    
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
        Schema::dropIfExists('setors');
    }
}
