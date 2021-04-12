<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recados', function (Blueprint $table) {
            $table->id();
            $table->string('data_recado');
            $table->string('assunto');
            $table->string('descriçao');
            $table->unsignedBigInteger('responsavel');
            $table->foreign('responsavel')->references('id')->on('users');//id do auxiliar responsável
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
        Schema::dropIfExists('recados');
    }
}
