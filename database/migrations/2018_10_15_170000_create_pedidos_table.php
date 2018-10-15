<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descricao');            
            $table->boolean('status'); 
            $table->integer('user_id')->unsigned()->nullable();    
            $table->foreign('user_id')->references('id')->on('users');    
            $table->integer('autonomo_id')->unsigned()->nullable();    
            $table->foreign('autonomo_id')->references('id')->on('autonomos');       
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
        Schema::dropIfExists('pedidos');
    }
}
