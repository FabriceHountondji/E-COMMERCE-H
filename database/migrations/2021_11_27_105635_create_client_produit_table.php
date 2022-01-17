<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_produit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantiteCommande');
            $table->date('dateCommande');
            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('acteurs');
            $table->unsignedInteger('produit_id');
            $table->foreign('produit_id')->references('id')->on('produits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_produit');
    }
}
