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
        Schema::create('personas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('documento');
            $table->string('nom1', 15);
            $table->string('nom2', 15);
            $table->string('ape', 30);
            $table->string('dir', 40);
            $table->string('tel', 15);
            $table->string('ciudad', 30);

            $table->primary('documento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
