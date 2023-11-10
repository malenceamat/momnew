<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GalleryRazdel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GalleryRazdel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gallery_id');
            $table->unsignedBigInteger('razdel_id');

            $table->foreign('gallery_id')->references('id')->on('gallery');
            $table->foreign('razdel_id')->references('id')->on('razdels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GalleryRazdel');
    }
}
