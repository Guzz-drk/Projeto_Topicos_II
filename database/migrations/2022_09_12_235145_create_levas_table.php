<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dt_fabricacao');
            $table->float('fervura_inicial');
            $table->string('tempo_fervura', 5);
            $table->float('qtd_agua');
            $table->float('qtd_fermento');
            $table->integer('id_fermento');
            $table->integer('id_lupulo');
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
        Schema::dropIfExists('levas');
    }
}
