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
        Schema::create('Distric_Secretary', function (Blueprint $table) {
            $table->string('Dis_S_Id')->unique();
            $table->string('Name');
            $table->integer('Office_number')->nullable();
            $table->integer('Personal_number');
            $table->string('Email')->nullable();
            $table->integer('Area_code')->nullable();
            $table->string('Area_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Distric_Secretary');
    }
};
