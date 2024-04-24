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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->text('primer_apellido');
            $table->text('segundo_apellido');
            $table->text('primer_nombre');
            $table->text('otros_nombres')->nullable();
            $table->text('pais_empleo');
            $table->text('tipo_identificacion');
            $table->text('numero_identificacion');
            $table->text('correo_electronico');
            $table->text('fecha_ingreso');
            $table->text('area');
            $table->text('estado')->default('Activo');
            $table->dateTime('fecha_hora_registro')->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('users2');
    }
};
