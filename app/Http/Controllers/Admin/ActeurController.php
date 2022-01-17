<?php

namespace App\Http\Controllers\Admin;

use App\Models\Acteur;
use Illuminate\Http\Request;

use App\Http\Requests\ActeurStoreRequest;
use App\Http\Requests\ActeurUpdateRequest;
use App\Repositories\ActeurRepository;
use App\Repositories\FonctionRepository;

class ActeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    protected $acteurRepo;
    protected $fonctionRepo;

    public function __construct(ActeurRepository $acteurRepo,FonctionRepository $fonctionRepo)
    {
        $this->acteurRepo = $acteurRepo;
        $this->fonctionRepo = $fonctionRepo;
    }

    public function index()
    {
        $acteurs = $this->acteurRepo->getlatest();
        return view('acteurs.index', compact('acteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fonctions = $this->fonctionRepo->getlatest();
        return view('acteurs.create',compact('fonctions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActeurStoreRequest $request)
    {
        $acteur = $this->acteurRepo->makeStore($request->validated());
        $acteurs = $this->acteurRepo->all();

        return redirect()->route('acteurs.index',compact('acteurs'))->with('success','Acteur enregistré avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function show(Acteur $acteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Acteur $acteur)
    {
        $fonction = $this->fonctionRepo->find($acteur->fonction->id);
        $acteur = $this->acteurRepo->find($acteur->id);
        $fonctions = $this->fonctionRepo->all();

        return view('acteurs.edit',compact('fonction','fonctions','acteur'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function update(ActeurUpdateRequest $request, Acteur $acteur)
    {
        $this->acteurRepo->makeUpdate($acteur->id,$request->validated());
        $acteurs = $this->acteurRepo->all();

        return redirect()->route('acteurs.index',compact('acteurs'))->with('success', 'Acteur mis à jour');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acteur  $acteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acteur $acteur)
    {
        $acteur->delete();
        $acteurs = $this->acteurRepo->all();

        return redirect()->route('acteurs.index',compact('acteurs'))->with('success','Acteur supprimé avec succès');
    }
}
