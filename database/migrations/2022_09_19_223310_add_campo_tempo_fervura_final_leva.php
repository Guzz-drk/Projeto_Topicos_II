<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCampoTempoFervuraFinalLeva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('levas', function (Blueprint $table) {
            $table->string('tempo_fervura_final', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('levas', function(Blueprint $table){
            $table->dropColumn('tempo_fervura_final');
        });
    }
}
