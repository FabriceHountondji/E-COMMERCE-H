<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use Illuminate\Http\Request;

use App\Http\Requests\ImageStoreRequest;
use App\Http\Requests\ImageUpdateRequest;
use App\Repositories\ImageRepository;
use App\Repositories\ProduitRepository;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $imageRepo;
    protected $produitRepo;

    public function __construct(ImageRepository $imageRepo,ProduitRepository $produitRepo)
    {
        $this->imageRepo = $imageRepo;
        $this->produitRepo = $produitRepo;
    }

    public function index()
    {
        $images = $this->acteurRepo->getlatest();
        return view('images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produits = $this->produitRepo->getlatest();
        return view('images.create',compact('produits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageStoreRequest $request)
    {
        $image = $this->imageRepo->makeStore($request->validated());
        $images = $this->imageRepo->all();

        return redirect()->route('images.index',compact('images'))->with('success','Image enregistrée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        $produit = $this->produitRepo->find($image->produit->id);
        $image = $this->imageRepo->find($image->id);
        $produits = $this->produitRepo->all();

        return view('images.edit',compact('produit','produits','image'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(ImageUpdateRequest $request, Image $image)
    {
        $this->imageRepo->makeUpdate($image->id,$request->validated());
        $images = $this->imageRepo->all();

        return redirect()->route('images.index',compact('images'))->with('success', 'Image mis à jour');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image->delete();
        $images = $this->imageRepo->all();

        return redirect()->route('images.index',compact('images'))->with('success','Image supprimée avec succès');

    }
}
