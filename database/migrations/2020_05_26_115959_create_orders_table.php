<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_product')->nullable();
            $table->unsignedBigInteger('id_admin')->nullable();
            $table->unsignedBigInteger('id_coupon')->nullable();
            $table->string('invoice')->index();
            $table->string('link')->nullable();
            $table->integer('price');
            $table->string('name');
            $table->string('email');
            $table->string('hp');
            $table->text('catatan')->nullable();            
            $table->unsignedBigInteger('status')->nullable();
            $table->string('links_keyword')->nullable();
            $table->string('custom_product')->nullable();
            $table->timestamps();

            $table->foreign('id_coupon')->references('id')->on('coupons');
            $table->foreign('id_product')->references('id')->on('products');
            $table->foreign('id_admin')->references('id')->on('users');
            $table->foreign('status')->references('id')->on('order_statuses');
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
