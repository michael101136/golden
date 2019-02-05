<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
           $table->increments('id');
            $table->string('name',225);
            $table->string('email',255);
            $table->date('date');
            $table->string('nationality',20)->nullable();
            $table->string('testimonial',1050)->nullable();
            $table->string('photo',255);
            $table->string('status',255);
            $table->string('language',255);
            $table->integer('impresion_global')->nullable();
            $table->string('ig_comentario',1050)->nullable();
            $table->integer('i_organizacion')->nullable();
            $table->integer('i_transporte')->nullable();
            $table->integer('i_chofer')->nullable();
            $table->string('i_comentario',1050)->nullable();
            $table->integer('g_conocimiento')->nullable();
            $table->integer('g_simpatia')->nullable();
            $table->integer('g_eficacia')->nullable();
            $table->integer('g_comunicacion')->nullable();
            $table->string('c_comentario',1050)->nullable();
            $table->integer('alojamiento_limpieza')->nullable();
            $table->integer('alojamiento_servicio')->nullable();
            $table->string('alojamiento_comentario',1050)->nullable();
            $table->integer('comida_calidad')->nullable();
            $table->integer('comida_servicio')->nullable();
            $table->string('comida_comentario',1050)->nullable();
            $table->string('le_gusta',1050)->nullable();
            $table->string('no_le_gusta',1050)->nullable();
            $table->string('recomendaria',50)->nullable();
            $table->string('contactarnos',1050)->nullable();
            $table->string('codigo_viaje',1050)->nullable();
            $table->string('acompanante',1050)->nullable();
            $table->string('tipo',255)->nullable();
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
        Schema::dropIfExists('testimonials');
    }
}
