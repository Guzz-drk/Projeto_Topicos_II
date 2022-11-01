<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLupuloToLevas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('levas', function (Blueprint $table) {
            $table->bigInteger('lupulos_id')->unsigned()->nullable();
            $table->foreign('lupulos_id')->references('id')->on('lupulos');
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