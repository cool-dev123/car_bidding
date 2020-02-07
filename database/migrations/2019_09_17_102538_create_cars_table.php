<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userId');
            $table->integer('bodyId');
            $table->integer('categorId');
            $table->integer('modelId');
            $table->integer('parkingId');
            $table->integer('stateId');
            $table->integer('year');
            $table->integer('milage');
            $table->integer('engine');
            $table->integer('startingPrice');
            $table->integer('currentPrice');
            $table->integer('auctionStep');
            $table->string('auctionStart');
            $table->string('endOfAuction');
            $table->string('comments');
            $table->string('documents');
            $table->string('color');
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
        Schema::dropIfExists('cars');
    }
}
