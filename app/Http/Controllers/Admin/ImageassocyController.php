<?php

namespace App\Http\Controllers\Admin;

use App\Models\Imageassocy;
use Illuminate\Http\Request;

use App\Http\Requests\ImageassocyStoreRequest;
use App\Http\Requests\ImageassocyUpdateRequest;

use App\Repositories\ImageassocyRepository;
use App\Repositories\ProduitRepository;
use App\Repositories\ImageRepository;

class ImageassocyController extends Controller
{

    protected $imageRepo;
    protected $produitRepo;
    protected $imageassocyRepo;

    public function __construct(ImageRepository $imageRepo, ProduitRepository $produitRepo, ImageassocyRepository $imageassocyRepo)
    {
        $this->imageRepo = $imageRepo;
        $this->produitRepo = $produitRepo;
        $this->imageassocyRepo = $imageassocyRepo;
    }

    public function index()
    {
        $imageassocies = $this->imageassocyRepo->getlatest();
        return view('imageassocies.index', compact('imageassocies'));

    }

    public function create()
    {
        $images = $this->imageRepo->getlatest();
        $produits = $this->produitRepo->getlatest();
        return view('imageassocies.create',compact('images','produits'));

    }

    public function store(ImageassocyStoreRequest $request)
    {
        $this->imageassocyRepo->makeStore($request->validated());
        return redirect()->route('imageassocies.index')->with('success', 'Image associée à ce produit avec succès');

    }


    public function show(Imageassocy $imageassocy)
    {
        //
    }

    public function edit(Imageassocy $imageassocy)
    {
        $image = $this->imageRepo->find($imageassocy->image->id);
        $produit = $this->produitRepo->find($imageassocy->produit->id);
        $imageassocy = $this->imageassocyRepo->find($imageassocy->id);

        $answers = $this->answerRepo->all();
        $produits = $this->produitRepo->all();

        return view('imageassocies.edit',compact('image','images','produit','produits','imageassocy'));

    }

    public function update(ImageassocyUpdateRequest $request, Imageassocy $imageassocy)
    {
        $this->imageassocyRepo->makeUpdate($imageassocy->id,$request->validated());
        return redirect()->route('imageassocies.index')->with('success', 'Image associée à ce produit mis à jour avec succès');

    }

    public function destroy(Imageassocy $imageassocy)
    {
        $imageassocy->delete();
        return redirect()->route('imageassocies.index')->with('success','Image associée à ce produit supprimée avec succès');

    }
}
