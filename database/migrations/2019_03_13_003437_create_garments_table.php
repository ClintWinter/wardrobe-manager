<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garments', function (Blueprint $table) {
            $table->increments('GarmentID');
            $table->binary('Deleted');
            $table->integer('UserID');
            $table->integer('TypeID');
            $table->string('Color');
            $table->string('Material');
            $table->string('Fit');
            $table->string('Formality');
            $table->binary('Favorite');
            $table->tinyInteger('WornStatus');
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
        Schema::dropIfExists('garments');
    }
}