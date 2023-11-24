<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('state_id');
            $table->string('college_name');
            $table->string('college_type');
            $table->string('city');
            $table->string('state');
            $table->string('certification');
            $table->string('estd_date');
            $table->string('rating');
            $table->string('email');
            $table->string('phone');
            $table->string('key_points');
            $table->string('logo');
            $table->text('slider')->nullable();
            $table->text('about');
            $table->foreign('state_id')->references('id')->on('state');
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
        Schema::dropIfExists('college');
    }
}
