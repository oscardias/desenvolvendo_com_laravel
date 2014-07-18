<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarUsuarios extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function($table)
        {
            $table->increments('id');
            $table->string('email', 255)->unique();
            $table->string('senha', 60);
            $table->string('nome', 255);
            $table->enum('tipo', array('admin', 'autor'));
            $table->string('remember_token', 100)->nullable();
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
        Schema::drop('usuarios');
    }

}
