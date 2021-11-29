<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFournisseurProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseur_produit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantite');
            $table->unsignedInteger('fournisseur_id');
            $table->foreign('fournisseur_id')->references('id')->on('users');
            $table->unsignedInteger('produit_id');
            $table->foreign('produit_id')->references('id')->on('produits');
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
        Schema::dropIfExists('fournisseur_produit');
    }
}
