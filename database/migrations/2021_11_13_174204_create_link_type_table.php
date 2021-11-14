<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lien_type', function (Blueprint $table) {
            $table->unsignedBigInteger('id_type');
            $table->foreign('id_type')->references('id')->on('type');
            $table->unsignedBigInteger('id_formation');
            $table->foreign('id_formation')->references('id')->on('formation');
           // Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lien_type');
    }
}
