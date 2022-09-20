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
        Schema::create('community_leaders', function (Blueprint $table) {
            $table->string('CL_Id')->unique();
            $table->string('Name');
            $table->integer('Contact_number')->nullable();
            $table->string('GN_Id');
            $table->foreign('GN_Id')->references('GN_Id')->on('grama_niladari') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('community_leaders');
    }
};
