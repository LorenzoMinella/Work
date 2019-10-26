<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_page', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description_home')->nullable();
            $table->text('select_alarm')->nullable();
            $table->string('desc_one')->nullable();
            $table->string('desc_two')->nullable();
            $table->string('desc_three')->nullable();
            $table->text('description_middle')->nullable();
            $table->string('card_one')->nullable();
            $table->string('card_two')->nullable();
            $table->string('card_three')->nullable();
            $table->string('card_four')->nullable();
            $table->string('card_five')->nullable();
            $table->string('card_six')->nullable();
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
        Schema::dropIfExists('home_page');
    }
}
