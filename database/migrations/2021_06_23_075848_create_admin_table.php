<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile')->unique();
            $table->string('password');
            $table->string('slider1')->nullable();
            $table->string('slider2')->nullable();
            $table->string('slider3')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('admin')->insert(
        array(
            'id' => '0',
            'name' => 'SuperAdmin',
            'email' => 'superadmin@zeqoon.com',
            'mobile' => '0000000000',
            'password' => bcrypt('zeqoon@1234')
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
        Schema::dropIfExists('admin');
    }
}
