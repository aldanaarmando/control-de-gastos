<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos', function (Blueprint $table) {
            $table->unsignedInteger('id_gasto');
            $table->string('nombre_gasto');
            $table->string('tipo_gasto');
            $table->integer('precio_unitario');
            $table->integer('cantidad');
            $table->integer('total');
            $table->index(['id_gasto']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * 
     * 










     */
    public function down()
    {
        Schema::dropIfExists('gastos');
    }
}
