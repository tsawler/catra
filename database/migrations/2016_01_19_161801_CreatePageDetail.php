<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageDetail extends Migration
{
    public function up()
    {
        Schema::create('page_details', function ($table)
        {
            $table->increments('id');
            $table->integer('page_id')->unsigned()->nullable();
            $table->integer('page_category_id')->unsigned()->nullable();
            $table->timestamps();

            $table->index('page_id');
            $table->index('page_category_id');

            $table->foreign('page_category_id')
                ->references('id')
                ->on('page_categories')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->foreign('page_id')
                ->references('id')
                ->on(Config::get('vcms5.pages_table'))
                ->onUpdate('cascade')
                ->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::drop('page_details');
    }
}
