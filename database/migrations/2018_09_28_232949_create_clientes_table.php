<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('telefone');
            $table->string('celular');
            $table->integer('user_id')->unsigned()->nullable();    
            $table->foreign('user_id')->references('id')->on('users');   
            $table->integer('endereco_id')->unsigned()->nullable();    
            $table->foreign('endereco_id')->references('id')->on('enderecos');           
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
        Schema::dropIfExists('clientes');
    }
}
