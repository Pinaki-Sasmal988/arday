<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placement', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('college_id');
            $table->string('company1');
            $table->string('company2');
            $table->string('company3');
            $table->string('company4');
            $table->string('company5');
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
        Schema::dropIfExists('placement');
    }
}
