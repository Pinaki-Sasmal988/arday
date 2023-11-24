<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('course');
            $table->string('college');
            $table->string('state');
            $table->string('type')->default('Guest');
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
        Schema::dropIfExists('guest_applications');
    }
}
