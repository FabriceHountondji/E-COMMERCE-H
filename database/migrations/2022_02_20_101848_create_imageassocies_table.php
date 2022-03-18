<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageassociesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imageassocies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('produit_id');
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('image_id');
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('imageassocies');
    }
}
