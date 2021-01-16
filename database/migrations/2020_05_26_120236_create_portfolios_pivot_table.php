<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios_pivot', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_portfolio');
            $table->unsignedBigInteger('id_portfolio_category');
            $table->timestamps();

            $table->foreign('id_portfolio')->references('id')->on('portfolios')->onDelete('cascade');
            $table->foreign('id_portfolio_category')->references('id')->on('portfolio_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios_pivot');
    }
}
