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
        Schema::create('grama_niladari_areas', function (Blueprint $table) {
            $table->integer('NIC');
            $table->integer('Area_code')->unique();
            $table->string('Area_name');
            $table->string('Longitude');
            $table->string('Latitude');
            $table->foreign('NIC')->references('NIC')->on('grama_niladaris');

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
        Schema::dropIfExists('grama_niladari_areas');
    }
};
