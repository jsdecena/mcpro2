<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('province_id')->unsigned();
            $table->foreign('province_id')->references('id')->on('provinces'); 
            $table->text('description')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->integer('status')->nullable()->default(1);                       
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
        Schema::drop('cities');
    }
}
