<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlterFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faqs', function (Blueprint $table) {

            $table->unsignedInteger('faq_category_id')->nullable();
            $table->foreign('faq_category_id')->references('id')->on('faqs_categories');
        });
    }

    /**
     * 

     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faqs', function (Blueprint $table) {
            //
            $table->dropForeign('faqs_faq_category_id_foreign');
        });
    }
}
