<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->integer('document')->unique();
            $table->string('genre');
            $table->date('birthday');
            $table->string('copyDocument');
            $table->string('copyBirth');
            $table->string('copyTitle');
            $table->string('copyNotes');
            $table->string('copyOpsu');
            $table->string('copyBackground');
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
        Schema::dropIfExists('user');
    }
}
