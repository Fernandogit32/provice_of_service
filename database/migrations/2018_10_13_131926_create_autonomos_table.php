<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutonomosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autonomos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('telefone');
            $table->string('celular');
            $table->string('profissao');
            $table->string('descricao');        
            $table->string('foto')->nullable();        
            $table->float('media', 8, 2)->nullable();
            $table->integer('user_id')->unsigned()->nullable();    
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('autonomos');
    }
}
