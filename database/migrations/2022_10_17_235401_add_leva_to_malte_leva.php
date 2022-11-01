<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevaToMalteLeva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('malte_levas', function (Blueprint $table) {
            $table->bigInteger('id_leva')->unsigned()->nullable();
            $table->bigInteger('id_malte')->unsigned()->nullable();
            $table->foreign('id_leva')->references('id')->on('levas');
            $table->foreign('id_malte')->references('id')->on('maltes');
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
            $table->dropForeign('malte_levas_id_leva_foreign');
            $table->dropForeign('malte_levas_id_malte_foreign');
            $table->dropColumn('id_leva');
            $table->dropColumn('id_malte');
        });
    }
}
