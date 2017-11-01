<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddrsBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function($theAddress)
        {
            $theAddress->increments('id');
            $theAddress->string('name');
            $theAddress->string('tel');
            $theAddress->string('addrs1');
            $theAddress->string('addrs2');
            $theAddress->integer('zip');
            $theAddress->string('city');
            $theAddress->string('state');
            $theAddress->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('addresses');
    }
}
