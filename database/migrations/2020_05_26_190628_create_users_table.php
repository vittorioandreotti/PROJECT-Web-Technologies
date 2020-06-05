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
            $table->string('name',30);
            $table->string('surname',30);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username',20)->unique();
            $table->string('password');
            $table->string('role',10)->default('user');
            $table->string('residence',30);
            $table->date('birthday');
            $table->string('job');
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
