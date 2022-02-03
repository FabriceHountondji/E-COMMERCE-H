<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests\Admin\ChangePasswordRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// use app\Rules\MatchOldPassword;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $userRepo;
    protected $roleRepo;

    public function __construct(UserRepository $userRepo, RoleRepository $roleRepo)
    {
        $this->userRepo = $userRepo;
        $this->roleRepo = $roleRepo;

    }
    public function index()
    {
        $users = $this->userRepo->getlatest();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->roleRepo->getlatest();
        return view('users.create',compact('fonctions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $user = $this->userRepo->makeStore($request->validated());
        $users = $this->userRepo->all();
        return redirect()->route('users.index',compact('users'))->with('success', 'Compte utilisateur ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $role = $this->roleRepo->find($user->role->id);
        $user = $this->userRepo->find($user->id);
        $roles = $this->roleRepo->all();

        return view('users.edit',compact('role','roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $this->userRepo->makeUpdate($user->id,$request->validated());
        $users = $this->userRepo->all();

        return redirect()->route('users.index',compact('users'))->with('success', 'Compte utilisateur mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        $users = $this->userRepo->all();

        return redirect()->route('users.index',compact('users'))->with('success','Compte utilisateur supprimé avec succès');

    }

    // public function postSecurity(ChangePasswordRequest $request)
    // {
    //     $user = Auth::user();
    //     if (Hash::check($request->current_password, Auth::user()->password)) {
    //         $user->update(['password' => Hash::make($request->password)]);
    //         return back()->with('success', 'password updated succesfully');
    //     } else {
    //         $validator = Validator::make([], []);
    //         $validator->getMessageBag()->add('current_password', 'wrong password');
    //         return back()->withErrors($validator);
    //     }
    // }
}
