<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControloMpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controlo_mps', function (Blueprint $table) {
            $table->id();
            $table->string('nome_produto');
            $table->string('responsavel');
            $table->date('data_receçao');
            $table->string('fornecedor');
            $table->string('num_fatura');
            $table->date('data_val');
            $table->string('lote');
            $table->string('higiene');
            $table->string('temperatura');
            $table->string('peso');
            $table->string('aspeto');
            $table->string('açoes_corretivas');
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
        Schema::dropIfExists('controlo_mps');
    }
}
