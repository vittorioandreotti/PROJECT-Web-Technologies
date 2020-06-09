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
            $table->bigIncrements('codProd');
            $table->string('nome',60);
            $table->bigInteger('codCat')->unsigned()->index();
            $table->foreign('codCat')->references('codCat')->on('categoria');
            $table->string('descCorta',500);
            $table->string('descLunga',5000);
            $table->float('prezzo');
            $table->integer('percSconto');
            $table->tinyInteger('sconto');
            $table->text('image')->nullable();
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
