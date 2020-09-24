<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemaforosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semaforos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rojo')->default("No hay mensaje para color rojo");
            $table->string('amarillo')->default("No hay mensaje para color amarillo");;
            $table->string('verde')->default("No hay mensaje para color verde");;
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
        Schema::dropIfExists('semaforos');
    }
}
