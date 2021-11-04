<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('commercial_name', 50);
            $table->string('country', 20);
            $table->string('region', 20);
            $table->string('city', 20);
            $table->string('period', 20);
            $table->string('description', 200);
            $table->float('price', 11, 2)->unsigned();
            $table->boolean('all_inclusive');
            $table->smallInteger('seats')->unsigned();
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
        Schema::dropIfExists('travels');
    }
}
