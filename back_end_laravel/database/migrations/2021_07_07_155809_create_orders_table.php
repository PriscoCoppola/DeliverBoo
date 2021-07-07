<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->float('amount', 5,2);


            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')
            ->on('users')
            ->onDelete('set null');

            $table->unsignedBigInteger('food_id')->nullable();
            $table->foreign('food_id')->references('id')
            ->on('foods')
            ->onDelete('set null');

            $table->unsignedBigInteger('drink_id')->nullable();
            $table->foreign('drink_id')->references('id')
            ->on('drinks')
            ->onDelete('set null');

            $table->unsignedBigInteger('souce_id')->nullable();
            $table->foreign('souce_id')->references('id')
            ->on('souces')
            ->onDelete('set null');

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
        Schema::dropIfExists('orders');
    }
}
