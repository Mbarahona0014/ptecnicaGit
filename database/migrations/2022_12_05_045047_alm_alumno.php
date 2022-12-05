<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlmAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('alm_alumno', function (Blueprint $table) {
            $table->id('alm_id');
            $table->string('alm_codigo',100);
            $table->string('alm_nombre',300);
            $table->integer('alm_edad');
            $table->string('alm_sexo',100);
            $table->string('alm_observacion',300);
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
        //
        Schema::dropIfExists('alm_alumno');
    }
}
