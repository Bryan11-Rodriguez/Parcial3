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
        Schema::create('notas', function (Blueprint $table) {
            $table->id('idnota');
            $table->decimal('nota1', 5, 2);
            $table->decimal('nota2', 5, 2);
            $table->decimal('nota3', 5, 2);
            $table->decimal('nota4', 5, 2);
            $table->decimal('promedio', 5, 2);
            $table->integer('parcial');
            $table->unsignedBigInteger('idalumno');
            $table->unsignedBigInteger('idcursos');
            $table->unsignedBigInteger('idprofesor');
            $table->timestamps();

            $table->foreign('idalumno')->references('idalumno')->on('alumnos');
            $table->foreign('idcursos')->references('idcursos')->on('cursos');
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
        Schema::dropIfExists('notas');
    }
};
