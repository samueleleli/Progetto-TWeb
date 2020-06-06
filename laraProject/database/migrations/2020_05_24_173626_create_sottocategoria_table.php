<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSottocategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sottocategoria', function (Blueprint $table) {           
            $table->bigIncrements('idSottocategoria')->unsigned();
            $table->string('sottocategoria',50)->unique();           
            $table->bigInteger('idCategoria')->unsigned()->index();
            $table->foreign('idCategoria')->references('idCategoria')->on('categoria');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sottocategoria');
    }
}
