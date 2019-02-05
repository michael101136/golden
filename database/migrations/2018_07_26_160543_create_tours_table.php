<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',500);
            $table->string('img',500);
            $table->string('description_short',500);
            $table->mediumText('description_complete');
            $table->mediumText('organization')->nullable();
            $table->string('meta_description',500)->nullable();
            $table->string('meta_keywords',500)->nullable();
            $table->string('status',1);
            $table->boolean('principal');
            $table->float('price',8,2);
            $table->string('slug',100)->unique();
            $table->string('tipo_tour',120);
            $table->unsignedInteger('multimedia_id');
            $table->foreign('multimedia_id')->references('id')->on('multimedia');
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
        Schema::dropIfExists('tours');
    }
}
