<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function($newtable){
           $newtable->increments('id');
           $newtable->string('email')->unique();
           $newtable->string('username',200)->unique();
           $newtable->string('password',50);
           $newtable->string('remember_token',200);
           $newtable->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        //
    }
}
