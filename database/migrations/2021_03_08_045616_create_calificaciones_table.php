<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->string('NombreAlumno');
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->string('Correo');
            $table->string('Foto');
            $table->string('NombreCurso');
            $table->string('HorarioInicio');
            $table->string('Horariofin');
            $table->string('NombreDocente');
            $table->string('Nota1');
            $table->string('Nota2');
            $table->string('Nota3');
            $table->string('Nota4');
            $table->string('Promedio');
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
        Schema::dropIfExists('calificaciones');
    }
}
