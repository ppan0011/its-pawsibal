<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuburbareaaffectedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suburbareaaffected', function (Blueprint $table) {
            $table->id();
            $table->string('suburb');
            $table->string('neighbouringsuburbs');
            $table->string('totalarea');
            $table->string('areaaffected');
            $table->string('bushfireaffected');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suburbareaaffected');
    }
}
