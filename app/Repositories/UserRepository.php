<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class UserRepository
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
        $this->model = app(User::class);
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
    public function makeStore($data): User{
        $user = new User($data);

        $user->password = Hash::make($data['password']);

        if(request()->hasFile('photo')) {
            $imageUpload = request()->file('photo');
            $imageName = time() .'.'. $imageUpload->getClientOriginalExtension();
            $imagePath = public_path('storage/IMGS/imgs_users/');
            $imageUpload->move($imagePath, $imageName);
            $user->photo = 'storage/IMGS/imgs_users/' .$imageName;
        }

        $user->save();
        return $user;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): User{
        $user = User::findOrFail($id);

        if(request()->hasFile('photo')) {
            $imageUpload = request()->file('photo');
            $imageName = time() .'.'. $imageUpload->getClientOriginalExtension();
            $imagePath = public_path('storage/IMGS/imgs_users/');
            $imageUpload->move($imagePath, $imageName);
            $user->photo = 'storage/IMGS/imgs_users/' .$imageName;
            $data['photo'] = $user->photo;
        }

        $user->update($data);
        return $user;
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
