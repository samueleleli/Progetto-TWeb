<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {            
            $table->bigIncrements('id');            
            $table->string('nome');
            $table->string('cognome');
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username',20)->unique();
            $table->string('password');
            $table->string('tipologiaUtente',20)->default('user');
            $table->string('via',80)->nullable();
            $table->string('citta',50)->nullable();
            $table->string('cap',20)->nullable();
            $table->string('stato',50)->nullable();
            $table->date('dataNascita')->nullable();
            $table->string('occupazione',50)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
