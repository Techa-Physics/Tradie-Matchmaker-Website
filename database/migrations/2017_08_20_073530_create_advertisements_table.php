<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->increments('id');               //Ad id
            $table->string('name');                 //name for the ad
            $table->string('service');              // service type for the ad
            $table->mediumText('body');             // short description about the ad
            $table->integer('user_id')->unsigned()->references('id')->on('users');        
                                                    // the user who created the ad, obtained from current user who creates the ad
            $table->string('location');             // location of the business
            $table->string('phone');                // phone number for the business
            $table->string('email');                // email fro the business, obtained from user login
            $table->string('image');                // optional image to upload
            $table->string('max_dist');             // max distance the business is willing to travel
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
        Schema::drop('advertisements');
    }
}
