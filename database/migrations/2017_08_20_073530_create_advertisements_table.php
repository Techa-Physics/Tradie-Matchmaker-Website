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

            $table->increments('id');               
            $table->string('name');                 
            $table->string('service');     
            $table->integer('quote');       
            $table->mediumText('body');            
            $table->integer('user_id')->unsigned();
            $table->string('location');             
            $table->string('phone');                
            $table->string('email');                            
            $table->string('max_dist');   
            $table->integer('views')->default(0);             

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
        Schema::dropIfExists('advertisements');
    }
}
