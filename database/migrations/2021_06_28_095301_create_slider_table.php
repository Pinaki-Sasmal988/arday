<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->id();
            $table->string('slider1')->default('slide1.jpg');
            $table->string('slider2')->default('slide2.jpg');
            $table->string('slider3')->default('slide3.jpg');
            $table->timestamps();
        });
        DB::table('slider')->insert(
        array(
            'id' => '1',
            'slider1' => 'slide1.jpg',
            'slider2' => 'slide2.jpg',
            'slider3' => 'slide3.jpg',
        )
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider');
    }
}
