<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalizarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localizars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('usuario')->unsigned();  
            $table->integer('ponto_localizado')->unsigned();
            $table->integer('setor_localizado')->unsigned();
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
        Schema::dropIfExists('localizars');
    }
}
