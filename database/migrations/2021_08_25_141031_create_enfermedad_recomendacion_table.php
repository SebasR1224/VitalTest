<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfermedadRecomendacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermedad_recomendacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('enfer_id');
            $table->unsignedBigInteger('recomen_id');

            $table->foreign('enfer_id')->references('id')->on('enfermedads')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('recomen_id')->references('id')->on('recomendacions')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        Schema::dropIfExists('enfermedad_recomendacion');
    }
}
