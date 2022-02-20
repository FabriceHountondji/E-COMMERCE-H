<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produit;
use Illuminate\Http\Request;

use App\Http\Requests\ProduitStoreRequest;
use App\Http\Requests\ProduitUpdateRequest;

use App\Repositories\ProduitRepository;

use App\Repositories\CategoryRepository;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $produitRepo;
    protected $categoryRepo;

    public function __construct(ProduitRepository $produitRepo,CategoryRepository $categoryRepo)
    {
        $this->produitRepo = $produitRepo;
        $this->categoryRepo = $categoryRepo;
    }

    public function index()
    {
        $produits = $this->produitRepo->getlatest();
        return view('produits.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryRepo->getlatest();
        return view('produits.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProduitStoreRequest $request)
    {
        $produit = $this->produitRepo->makeStore($request->validated());

        return redirect()->route('produits.index')->with('success','Produit enregistré avec succès.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        $category = $this->categoryRepo->find($produit->category->id);
        $produit = $this->produitRepo->find($produit->id);
        $categories = $this->categoryRepo->all();

        return view('produits.edit',compact('category','categories','produit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(ProduitUpdateRequest $request, Produit $produit)
    {
        $this->produitRepo->makeUpdate($produit->id,$request->validated());

        return redirect()->route('produits.index')->with('success', 'Produit mis à jour');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        $produits = $this->produitRepo->all();

        return redirect()->route('produits.index',compact('produits'))->with('success','Acteur supprimé avec succès');

    }
}
