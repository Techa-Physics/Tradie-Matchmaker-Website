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
            $table->string('town');
            $table->integer('postcode');           
            $table->string('phone');                
            $table->string('email');                            
            $table->integer('max_dist');     
            $table->string('latitude');
            $table->string('longitude');          

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
