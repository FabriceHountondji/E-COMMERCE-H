<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use Illuminate\Http\Request;

use App\Http\Requests\CategorieStoreRequest;
use App\Http\Requests\CategorieUpdateRequest;
use App\Repositories\CategorieRepository;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $categorieRepo;

    public function __construct(CategorieRepository $categorieRepo)
    {
        $this->categorieRepo = $categorieRepo;
    }

    public function index()
    {
        $categories = $this->categorieRepo->getlatest();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieStoreRequest $request)
    {
        $this->categorieRepo->makeStore($request->validated());

        return redirect()->route('categories.index')->with('success','Catégorie enregistrée avec succès.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $category)
    {
        $category = $this->categorieRepo->find($category->id);

        return view('categories.edit',compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(CategorieUpdateRequest $request, Categorie $category)
    {
        $this->categorieRepo->makeUpdate($category->id,$request->validated());

        return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success','Catégorie supprimée avec succès');

    }
}
