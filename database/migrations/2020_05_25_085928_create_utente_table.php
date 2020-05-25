<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utente', function (Blueprint $table) {
            $table->bigIncrements('codUser')->unsigned()->index();
            $table->string('nome');
            $table->string('cognome');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email');
            $table->string('ruolo',10)->default('user');
            $table->string('residenza');
            $table->date('dataNascita');
            $table->string('occupazione');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utente');
    }
}
