<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id')->unsigned();
            $table->integer('meal_id')->unsigned();
            $table->integer('agent_id')->unsigned();
            $table->string('name');
            $table->string('duration');
            $table->string('city');
            $table->string('facilities');
            $table->string('map');
            $table->string('per_person_charge');
            $table->text('important_information');
            $table->text('booking_policy');
            $table->string('tour_image');
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
        Schema::dropIfExists('packages');
    }
}
