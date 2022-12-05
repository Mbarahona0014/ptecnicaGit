<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('alm_alumno', function (Blueprint $table) {
            $table->unsignedBigInteger('alm_id_grd');
            $table->foreign('alm_id_grd')->references('grd_id')->on('grd_grado');
        });
        Schema::table('mxg_materiasxgrado', function (Blueprint $table) {
            $table->unsignedBigInteger('mxg_id_grd');
            $table->unsignedBigInteger('mxg_id_mat');
            $table->foreign('mxg_id_grd')->references('grd_id')->on('grd_grado');
            $table->foreign('mxg_id_mat')->references('mat_id')->on('mat_materia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('alm_alumno', function (Blueprint $table) {
            $table->dropForeign('alm_alumno_alm_id_grd_foreign');
        });
        Schema::table('mxg_materiasxgrado', function (Blueprint $table) {
            $table->dropForeign('mxg_materiasxgrado_mxg_id_grd_foreign');
            $table->dropForeign('mxg_materiasxgrado_mxg_id_mat_foreign');
        });
    }
}
