<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevaToEstiloLevas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estilo_levas', function (Blueprint $table) {
            $table->bigInteger('leva_id')->unsigned()->nullable();
            $table->foreign('leva_id')->references('id')->on('levas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estilo_levas', function (Blueprint $table) {
            //
        });
    }
}