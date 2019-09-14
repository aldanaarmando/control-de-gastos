<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->unsignedInteger('id_usuario');
            $table->string('nombre');
            $table->string('apellido_pat');
            $table->string('apellido_mat');
            $table->date('fecha_nac');
            $table->integer('celular');
            $table->string('genero');
            $table->index(['id_usuario']);
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
        Schema::dropIfExists('usuarios');
    }
}
