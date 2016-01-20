<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDidYouKnow extends Migration
{
    public function up()
    {
        Schema::create('did_you_knows', function ($table)
        {
            $table->increments('id');
            $table->text('item_text_en');
            $table->text('item_text_fr');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('did_you_knows');
    }
}
