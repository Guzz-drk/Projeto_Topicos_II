<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveLevaToMalteLeva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('malte_levas', function (Blueprint $table) {
            $table->dropColumn('id_leva');
            $table->dropColumn('id_malte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('malte_levas', function (Blueprint $table) {
            $table->integer('id_leva');
            $table->integer('id_malte');
        });
    }
}
