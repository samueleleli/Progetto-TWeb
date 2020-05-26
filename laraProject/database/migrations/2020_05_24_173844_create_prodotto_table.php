<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdottoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodotto', function (Blueprint $table) {
            $table->bigIncrements('idProdotto');           
            $table->string('nome', 40);
            $table->string('descrBreve',50);
            $table->string('descrEstesa',5000);
            $table->float('prezzo');
            $table->integer('percSconto');
            $table->tinyInteger('flagSconto');
            $table->text('immagine')->nullable();                    
            $table->bigInteger('idSottocategoria')->unsigned()->index();
            $table->foreign('idSottocategoria')->references('idSottocategoria')->on('sottocategoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodotto');
    }
}
