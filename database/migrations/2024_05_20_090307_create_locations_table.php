<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->string('location_id', 17)->primary();
            $table->string('location_name', 50)->nullable();
            $table->string('coordinates', 100)->nullable();
            $table->integer('population')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('locations');
    }
}