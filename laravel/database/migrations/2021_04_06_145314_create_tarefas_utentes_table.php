<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarefasUtentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas_utentes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('utente_id');
            $table->foreign('utente_id')->references('id')->on('utentes');//id do utente
            $table->unsignedBigInteger('auxiliar_id');
            $table->foreign('auxiliar_id')->references('id')->on('users');//id do auxiliar responsável
            $table->string('banho')->default(0);
            $table->string('insulina')->default(0);
            $table->integer('num_fraldas')->default(0);
            $table->integer('num_medicaçao')->default(0);
            $table->string('corte_cabelo')->default(0);
            $table->string('corte_barba')->default(0);
            $table->string('corte_unhas')->default(0);
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
        Schema::dropIfExists('tarefas_utentes');
    }
}
