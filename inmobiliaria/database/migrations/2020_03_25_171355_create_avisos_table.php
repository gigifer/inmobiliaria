<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAvisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avisos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('titulo')->nullable();
            $table->string('descripcion', 500)->nullable();
            $table->float('precio', 8, 2);
            $table->string('direccion', 30)->nullable();
            $table->string('localidad', 30)->nullable();
            $table->string('cocina', 30)->nullable();
            $table->string('dormitorios', 30)->nullable();
            $table->string('banios', 30)->nullable();
            $table->string('gastos', 30)->nullable();
            $table->string('lat', 50)->nullable();
            $table->string('lng', 50)->nullable();
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('avisos');
    }
}
