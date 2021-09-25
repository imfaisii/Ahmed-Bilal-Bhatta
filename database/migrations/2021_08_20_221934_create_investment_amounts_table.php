<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentAmountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment_amounts', function (Blueprint $table) {
            $table->id();
            $table->integer('amount')->unsigned()->nullable();
            $table->unsignedBigInteger('received_by');
            $table->unsignedBigInteger('investor_id');
            $table->foreign('received_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('investor_id')->references('id')->on('investers')->onDelete('cascade');
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
        Schema::dropIfExists('investment_amounts');
    }
}
