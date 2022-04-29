<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospectos', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nombre_prospecto');
        $table->string('primer_apellido');
        $table->string('segundo_apellido')->nullable();
        $table->string('calle');
        $table->integer('numero');
        $table->string('colonia');
        $table->integer('cp');
        $table->string('telefono');
        $table->string('rfc');
        $table->string('estatus')->references('id')->on('estados')->default('1');
        $table->string('observaciones')->nullable();
        $table->integer('promotor_id')->references('id')->on('promotores');
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
        Schema::dropIfExists('prospectos');
    }
}
