<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    public function up()
    {
        Schema::create('images', function ($table)
        {
            $table->increments('id');
            $table->string('province');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('images');
    }
}
