<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('college_id');
            $table->integer('Auditorium')->default(0);
            $table->integer('Bus')->default(0);
            $table->integer('Cafeteria')->default(0);
            $table->integer('Hostel')->default(0);
            $table->integer('Laboratory')->default(0);
            $table->integer('WiFi')->default(0);
            $table->integer('Medical')->default(0);
            $table->integer('Security')->default(0);
            $table->integer('Sports')->default(0);
            $table->integer('Computers')->default(0);
            $table->foreign('college_id')->references('id')->on('college');
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
        Schema::dropIfExists('facility');
    }
}
