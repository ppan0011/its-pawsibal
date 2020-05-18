<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuburbtemperaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suburbtemperatures', function (Blueprint $table) {
            $table->id();
            $table->string('lat');
            $table->string('long');
            $table->string('suburb');
            $table->string('region');
            $table->string('temperature');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suburbtemperatures');
    }
}
