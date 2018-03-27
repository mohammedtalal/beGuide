<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('left_adv');
            $table->string('left_alt');

            $table->string('right_adv');
            $table->string('right_alt');

            $table->string('mainBG_image');
            $table->string('mainBG_alt');

            $table->string('subscribeBG_image');
            $table->string('subscribeBG_alt');
            
            
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
         Schema::dropIfExists('advertises');
        
    }
}
