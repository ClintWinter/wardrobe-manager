<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutfitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outfits', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->boolean('deleted')->default(false);
            $table->boolean('favorite')->default(false);
            $table->UnsignedInteger('worn_cycle_length')->default(7);
            $table->unsignedSmallInteger('worn_cycle_max')->default(1);
            $table->unsignedSmallInteger('worn_in_cycle')->default(0);
            $table->unsignedInteger('top_under')->nullable();
            $table->unsignedInteger('top_middle')->nullable();
            $table->unsignedInteger('top_outer')->nullable();
            $table->unsignedInteger('bottom')->nullable();
            $table->unsignedInteger('sock')->nullable();
            $table->unsignedInteger('shoe')->nullable();
            $table->unsignedInteger('hat')->nullable();
            $table->unsignedInteger('scarf')->nullable();
            $table->unsignedInteger('glove')->nullable();
            $table->unsignedInteger('tie')->nullable();
            $table->unsignedInteger('pocket_square')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outfits');
    }
}
