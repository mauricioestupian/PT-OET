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
        Schema::table('per_rol', function (Blueprint $table) {
            $table->bigInteger('id_per')->unsigned();
            $table->foreign('id_per')->references('id')->on('personas');
            $table->bigInteger('id_rol')->unsigned();
            $table->foreign('id_rol')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('per_rol', function (Blueprint $table) {
            //
        });
    }
};
