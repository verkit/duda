<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice')->references('invoice')->on('orders');
            $table->string('sender')->nullable();
            $table->unsignedBigInteger('id_bank')->nullable();
            $table->dateTime('deadline');
            $table->string('evidence')->nullable();
            $table->text('note')->nullable();
            $table->enum('status', ['accepted', 'pending', 'refund', 'have problem']);
            $table->timestamps();

            // $table->foreign('id_order')->references('invoice')->on('orders');
            $table->foreign('id_bank')->references('id')->on('banks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
