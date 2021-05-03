<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ementa', function (Blueprint $table) {
            $table->id();

            $table->string('nutricionista');
            $table->string('info');
            $table->date('data_inicio');
            $table->date('data_fim');

            $table->string('seg_sopa');
            $table->string('seg_almoço');
            $table->string('seg_sob_almoço');
            $table->string('seg_jantar');
            $table->string('seg_sob_jantar');
            $table->string('ter_sopa');
            $table->string('ter_almoço');
            $table->string('ter_sob_almoço');
            $table->string('ter_jantar');
            $table->string('ter_sob_jantar');
            $table->string('qua_sopa');
            $table->string('qua_almoço');
            $table->string('qua_sob_almoço');
            $table->string('qua_jantar');
            $table->string('qua_sob_jantar');
            $table->string('qui_sopa');
            $table->string('qui_almoço');
            $table->string('qui_sob_almoço');
            $table->string('qui_jantar');
            $table->string('qui_sob_jantar');
            $table->string('sex_sopa');
            $table->string('sex_almoço');
            $table->string('sex_sob_almoço');
            $table->string('sex_jantar');
            $table->string('sex_sob_jantar');
            $table->string('sab_sopa');
            $table->string('sab_almoço');
            $table->string('sab_sob_almoço');
            $table->string('sab_jantar');
            $table->string('sab_sob_jantar');
            $table->string('dom_sopa');
            $table->string('dom_almoço');
            $table->string('dom_sob_almoço');
            $table->string('dom_jantar');
            $table->string('dom_sob_jantar');
            

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
        Schema::dropIfExists('ementa');
    }
}
