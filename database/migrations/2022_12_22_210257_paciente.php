<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) { 
            $table->id();
            $table->string('nombre_mascota');
            $table->string('propietario');
            $table->string('email');
            $table->string('sintomas');
            $table->integer('veterinario_id')->unsigned();
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
    }
};
