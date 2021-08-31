<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreMedicamento');
            $table->double('precioNormal' , 10,2);
            $table->integer('descuento');
            $table->string('estado', 30 );

            $table->unsignedBigInteger('labo_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();

            $table->timestamps();

            $table->foreign('labo_id')->references('id')->on('laboratorios')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->foreign('category_id')->references('id')->on('categorias')
            ->onDelete('set null')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicamentos');
    }
}
