<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WorkerKhaata extends Migration
{
    public function up()
    {
        Schema::create('worker_khaatas', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->integer('pageNo');
            $table->string('type');
            $table->unsignedBigInteger('worker_id');
            $table->foreign('worker_id')->references('id')->on('workers');
            $table->softDeletes();
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
        Schema::dropIfExists('worker_khaatas');
    }
}
