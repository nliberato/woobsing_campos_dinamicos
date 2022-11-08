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
        Schema::create('oferta_campo', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('oferta_id')->unsigned()->nullable(false);
            $table->foreign('oferta_id')->references('id')->on('ofertas')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('campo_id') ->unsigned()->nullable(false);
            $table->foreign('campo_id') ->references('id')->on('campos')->onDelete('cascade')->onUpdate('cascade'); 

            $table->text('nombre')->nullable(false);
            $table->text('descripcion')->nullable(false);
            $table->boolean('estado')->default(1);
            $table->boolean('obligatorio')->default(1);
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
        Schema::dropIfExists('oferta_campo');
    }
};
