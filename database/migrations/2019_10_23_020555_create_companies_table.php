<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('link_image');
            $table->string('phone');
            $table->string('url_web')->nullable();
            $table->text('nivel_seguridad')->nullable();
            $table->text('tecnologia')->nullable();
            $table->text('diferencia')->nullable();
            $table->text('precio')->nullable();
            $table->text('contratar')->nullable();
            $table->text('instalacion')->nullable();
            $table->text('direccion')->nullable();
            $table->text('permanencia')->nullable();
            $table->text('baja')->nullable();
            $table->text('facturacion')->nullable();

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
        Schema::dropIfExists('companies');
    }
}
