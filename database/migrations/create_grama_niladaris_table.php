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
        Schema::create('grama_niladaris', function (Blueprint $table) {
            $table->integer('NIC')->unique();
            $table->string('Name');
            $table->integer('Office_number')->nullable();
            $table->integer('Personal_number');
            $table->string('Email')->nullable();
            //$table->string('Div_S_Id');
            //$table->foreign('Div_S_Id')->references('Div_S_Id')->on('Divisional_Secretary');

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
        Schema::dropIfExists('grama_niladaris');
    }
};
