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
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('slug')->nullable();
            $table->text('descripcion_corta')->nullable();
            $table->text('description')->nullable();
            $table->string('experiencia')->nullable();
            $table->string('idioma')->nullable();
            $table->string('escolaridad')->nullable();
            $table->string('pais',100)->default('COLOMBIA')->nullable();
            $table->string('departamento',100)->nullable();
            $table->string('ciudad',100)->nullable();
            $table->string('salario')->nullable();
            $table->string('fecha_contratacion')->nullable();
            $table->string('tipo_contrato')->nullable();
            $table->string('categoria')->nullable();
            $table->string('duracion')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->boolean('activa')->nullable();
            $table->string('imagen')->nullable();
            $table->string('dominio')->nullable();
            $table->boolean('formulario')->nullable();
            $table->integer('empresa_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
};
