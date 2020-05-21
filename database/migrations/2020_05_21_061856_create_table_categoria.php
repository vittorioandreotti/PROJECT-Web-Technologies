<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_categoria', function (Blueprint $table) {
            $table->bigIncrements('codCat')->unsigned()->index();
            $table->string('name',25);
            $table->integer('codPar');
            $table->string('desc',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_categoria');
    }
}
