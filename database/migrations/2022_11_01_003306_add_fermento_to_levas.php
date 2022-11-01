<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFermentoToLevas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('levas', function (Blueprint $table) {
            $table->bigInteger('fermentos_id')->unsigned()->nullable();
            $table->foreign('fermentos_id')->references('id')->on('fermentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('levas', function (Blueprint $table) {
            //
        });
    }
}