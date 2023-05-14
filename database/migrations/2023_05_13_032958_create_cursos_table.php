<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id('idcursos');
            $table->string('nombrecurso');
            $table->integer('año');
            $table->integer('ciclo');
            $table->unsignedBigInteger('idprofesor');
            $table->timestamps();

            $table->foreign('idprofesor')->references('idprofesor')->on('profesor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};
