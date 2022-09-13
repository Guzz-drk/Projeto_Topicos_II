<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstiloLevasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estilo_levas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_leva', 50);
            $table->string('descricao', 100);
            $table->integer('id_leva');
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
        Schema::dropIfExists('estilo_levas');
    }
}
