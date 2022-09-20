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
        Schema::create('Divisional_Secretary', function (Blueprint $table) {
            $table->string('Div_S_Id',100)->unique();
            $table->string('Name');
            $table->integer('Office_number')->nullable();
            $table->integer('Personal_number');
            $table->string('Email')->nullable();
            $table->integer('Area_code')->nullable();
            $table->string('Area_number');
            $table->string('Dis_S_Id');
            $table->foreign('Dis_S_Id')->references('Dis_S_Id')->on('Distric_Secretary');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Divisional_Secretary');
    }
};
