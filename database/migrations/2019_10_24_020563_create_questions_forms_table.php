<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('forms_id')->nullable();
            $table->unsignedInteger('question_id')->nullable();
            $table->tinyInteger('asigned')->nullable();
            $table->foreign('forms_id')->references('id')->on('forms')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onUpdate('cascade')->onDelete('cascade');            
            $table->tinyInteger('first_question')->nullable();
            $table->tinyInteger('last_question')->nullable();
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
        Schema::dropIfExists('questions_forms');
    }
}
