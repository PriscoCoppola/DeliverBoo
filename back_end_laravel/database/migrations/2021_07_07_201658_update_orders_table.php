<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id')->nullable()->after('souce_id');
            $table->foreign('customer_id')->references('id')
            ->on('customers')
            ->onDelete('set null');

            $table->unsignedBigInteger('payment_id')->nullable()->after('customer_id');
            $table->foreign('payment_id')->references('id')
            ->on('payments')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_customer_id_foreign');
            $table->dropColumn('customer_id');

            $table->dropForeign('orders_payment_id_foreign');
            $table->dropColumn('payment_id');
        });
    }
}
