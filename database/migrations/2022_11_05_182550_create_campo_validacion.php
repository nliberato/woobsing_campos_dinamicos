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
        Schema::create('campo_validacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campo_id')     ->unsigned();
            $table->foreign('campo_id')     ->references('id')->on('campos')->onDelete('cascade')->onUpdate('cascade'); 
            $table->integer('validacion_id')->unsigned();
            $table->foreign('validacion_id')->references('id')->on('validaciones')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::table('campo_validacion', function (Blueprint $table) {
            $table->dropForeign(['campo_id']);
            $table->dropForeign(['validacion_id']);
        });

        Schema::dropIfExists('campo_validacion');
    }
};
