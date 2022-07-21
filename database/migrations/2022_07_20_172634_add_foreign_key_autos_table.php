<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('autos', function (Blueprint $table) {
            $table->bigInteger('id_marca')->unsigned();
            $table->foreign('id_marca')->references('id')->on('marcas');
            $table->bigInteger('id_con')->unsigned();
            $table->foreign('id_con')->references('id')->on('personas');
            $table->bigInteger('id_prop')->unsigned();
            $table->foreign('id_prop')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('autos', function (Blueprint $table) {
            //
        });
    }
};
