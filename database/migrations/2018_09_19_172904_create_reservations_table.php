<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120);
            $table->string('email', 120);
            $table->string('phone', 20)->nullable();
            $table->string('skype', 120)->nullable();
            $table->string('country', 120)->nullable();
            $table->date('fecha')->nullable();
            $table->string('travel_type')->nullable();
            $table->integer('numberPersonas')->nullable();
            $table->string('room_type')->nullable();
            $table->string('guide_service')->nullable();
            $table->text('message')->nullable();
            $table->text('status')->nullable();
            $table->unsignedInteger('tour_id');
            $table->foreign('tour_id')->references('id')->on('tours');
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
        Schema::dropIfExists('reservations');
    }
}
