<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageCategories extends Migration
{
    public function up()
    {
        Schema::create('page_categories', function ($table)
        {
            $table->increments('id');
            $table->string('category_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('page_categories');
    }
}
