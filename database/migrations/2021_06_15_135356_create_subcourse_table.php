<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcourse', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->string('subcourse_name');
            $table->integer('sub_course_duration');
            $table->integer('sub_per_year_fees');
            $table->foreign('course_id')->references('id')->on('course');
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
        Schema::dropIfExists('subcourse');
    }
}
