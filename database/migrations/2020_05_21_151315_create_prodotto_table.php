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
            $table->string('Nome',40);
            $table->bigIncrements('codCat')->unsigned()->index();
            $table->foreign('catCat')->references('codCat')->on('Categoria');
            $table->string('descCorta',40);
            $table->string('descLunga',80);
            $table->float('Prezzo');
            $table->integer('PercSconto');
            $table->tinyInteger('Sconto');
            $table->text('Immagine')->nullable();
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
