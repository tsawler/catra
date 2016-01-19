<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincialData extends Migration
{
    public function up()
    {
        Schema::create('provinces', function ($table)
        {
            $table->increments('id');
            $table->string('province');
            $table->integer('year');
            $table->string('collected');
            $table->string('recycled');
            $table->string('energy_recovery');
            $table->string('diversion_rate');
            $table->string('five_year_average');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('provinces');
    }
}
