<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionninasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('optionninas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('option');
            $table->string('type');
            $table->unsignedInteger('position_id');
            $table->timestamps();

            $table->foreign('position_id')->references('position')->on('questionninas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('optionninas');
    }
}
