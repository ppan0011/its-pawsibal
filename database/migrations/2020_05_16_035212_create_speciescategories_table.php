<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeciescategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speciescategories', function (Blueprint $table) {
            $table->id();
            $table->string('region');
            $table->string('suburbs');
            $table->string('category');
            $table->string('tax_family');
            $table->string('common_name');
            $table->string('description');
            $table->string('scientific_name');
            $table->string('conservation_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('speciescategories');
    }
}
