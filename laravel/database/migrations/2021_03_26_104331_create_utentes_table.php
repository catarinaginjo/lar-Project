<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateUtentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utentes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('apelido');
            $table->date('data_nascimento');
            $table->string('morada');
            $table->string('contacto_familiar'); 
            $table->string('localidade');
            $table->string('diabetes')->nullable();
            $table->string('hipertensao')->nullable();
            $table->string('dieta')->nullable();
            $table->string('condiçao')->nullable();
            $table->string('medicaçao')->nullable();
            $table->string('doença')->nullable();
            $table->string('alergia')->nullable();
            $table->string('cuidados')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('utentes');
    }
}
