<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityVerifikatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_verifikator', function (Blueprint $table) {
            $table->foreignId('city_id')->constrained('cities');
            $table->foreignId('verifikator_id')->constrained('verifikators');
            $table->primary(['city_id', 'verifikator_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city_verifikator');
    }
}
