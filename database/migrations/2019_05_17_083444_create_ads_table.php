<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->references('id')->on('users');
            $table->string('title');
            $table->string('description');
            $table->string('state');
            $table->string('city');
            $table->string('category');
            $table->string('subcategory');
            $table->string('phone');
            $table->string('price');
            $table->string('long');
            $table->string('latit');
            $table->string('img');
            $table->string('imgs');
            $table->rememberToken();
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
        Schema::dropIfExists('ads');
    }
}
