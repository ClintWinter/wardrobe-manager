<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGarmentTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garment_tag', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('tag_id');
            $table->unsignedInteger('garment_id');
            $table->boolean('deleted')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('garment_id')->references('id')->on('garments');
            $table->unique(['user_id', 'tag_id', 'garment_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('garment_tag');
    }
}
