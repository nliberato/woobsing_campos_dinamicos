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
        Schema::create('tipo_validacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('validacion_id')->unsigned();
            $table->foreign('validacion_id')->references('id')->on('validaciones')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nombre'  , 100);
            $table->string('regla'   , 100);
            $table->string('mensaje_invalido', 255);
            $table->boolean('estado') -> default('1');
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

        Schema::table('tipo_validacion', function (Blueprint $table) { 
            $table->dropForeign(['validacion_id']);
        });

        Schema::dropIfExists('tipo_validacion');
    }
};
