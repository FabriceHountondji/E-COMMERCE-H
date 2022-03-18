<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use Illuminate\Http\Request;

use App\Http\Requests\ClientStoreRequest;
use App\Http\Requests\ClientUpdateRequest;

use App\Repositories\ClientRepository;
use App\Repositories\UserRepository;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $clientRepo;
    protected $userRepo;

    public function __construct(ClientRepository $clientRepo, UserRepository $userRepo)
    {
        $this->clientRepo = $clientRepo;
        $this->userRepo = $userRepo;
    }

    public function index()
    {
        $clients = $this->clientRepo->getlatest();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->userRepo->getlatest();
        return view('clients.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientStoreRequest $request)
    {
        $client = $this->clientRepo->makeStore($request->validated());

        return redirect()->route('clients.index')->with('success','Client enregistré avec succès.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $user = $this->userRepo->find($client->user->id);
        $client = $this->clientRepo->find($client->id);
        $users = $this->userRepo->all();

        return view('acteurs.edit',compact('client','user','users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientUpdateRequest $request, Client $client)
    {
        $this->clientRepo->makeUpdate($client->id,$request->validated());
        $clients = $this->clientRepo->all();

        return redirect()->route('clients.index',compact('clients'))->with('success', 'Client mis à jour');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')->with('success','Client supprimé avec succès');

    }
}
