<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\Models\Acteur;

class ActeurRepository
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
        $this->model = app(Acteur::class);
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
    public function makeStore($data): Acteur{
        $acteur = new Acteur($data);


        if(request()->hasFile('photo')) {
            $imageUpload = request()->file('photo');
            $imageName = time() .'.'. $imageUpload->getClientOriginalExtension();
            $imagePath = public_path('storage/IMGS/imgs_photos/');
            $imageUpload->move($imagePath, $imageName);
            $acteur->photo = 'storage/IMGS/imgs_photos/' .$imageName;
        }

        $acteur->save();
        return $acteur;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Acteur{
        $acteur = Acteur::findOrFail($id);

        if(request()->hasFile('photo')) {
            $imageUpload = request()->file('photo');
            $imageName = time() .'.'. $imageUpload->getClientOriginalExtension();
            $imagePath = public_path('storage/IMGS/imgs_photos/');
            $imageUpload->move($imagePath, $imageName);
            $acteur->photo = 'storage/IMGS/imgs_photos/' .$imageName;
            $data['photo'] = $acteur->photo;
        }

        $acteur->update($data);
        return $acteur;
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
