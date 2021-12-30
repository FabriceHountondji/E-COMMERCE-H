<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Produit; 

class ProduitRepository
{
    use Repository;

    /**
     * The model being queried.
     *
     * @var Model
     */
    protected $model;
    

    /**
     * Constructor
     */
    public function __construct()
    {
        // setup the model
        $this->model = app(Produit::class);
    }

    /**
     * Check if exists
     */
    public function ifExist($id)
    {
        return $this->find($id);
    }

    /**
     * Get an element
     */
    public function get($id)
    {
        return $this->findOrFail($id);
    }

    /**
     * To store model
     */
    public function makeStore($data): Produit{
        $produit = new Produit($data);
        $produit->save();
        return $produit;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Produit{
        $produit = Produit::findOrFail($id);
        $produit->update($data);
        return $produit;
    }

    /**
     * To delete model
     */
    public function makeDestroy($id)
    {
        return $this->findOrFail($id)->delete();
    }

    /**
     * To get all latest
     */
    public function getlatest()
    {
        return $this->latest()->get();
    }
}
