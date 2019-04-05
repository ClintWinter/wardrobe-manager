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
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->boolean('deleted')->default(0);
            $table->string('name')->nullable();
            $table->string('image_path')->nullable();
            $table->unsignedInteger('garment_type_id')->default(0);
            $table->boolean('active')->default(1);
            $table->UnsignedInteger('worn_cycle_length')->default(7);
            $table->unsignedSmallInteger('worn_cycle_max')->default(1);
            $table->unsignedSmallInteger('worn_in_cycle')->default(0);
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('garment_type_id')->references('id')->on('garment_types');
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
