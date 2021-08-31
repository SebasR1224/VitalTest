<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentoRecomendacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamento_recomendacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medi_id');
            $table->unsignedBigInteger('recome_id');

            $table->foreign('medi_id')->references('id')->on('medicamentos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('recome_id')->references('id')->on('recomendacions')
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
        Schema::dropIfExists('medicamento_recomendacion');
    }
}
