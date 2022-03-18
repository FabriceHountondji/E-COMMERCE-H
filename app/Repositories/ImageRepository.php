<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\Models\Image; 

class ImageRepository
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
        $this->model = app(Image::class);
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
    public function makeStore($data): Image{
        $image = new Image($data);

        if(request()->hasFile('url')) {
            $imageUpload = request()->file('url');
            $imageName = time() .'.'. $imageUpload->getClientOriginalExtension();
            $imagePath = public_path('storage/IMGS/imgs_produits/'); 
            $imageUpload->move($imagePath, $imageName);
            $image->url = 'storage/IMGS/imgs_produits/' . $imageName;
        }

        $image->save();
        return $image;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Image{
        $image = Image::findOrFail($id);

        if(request()->hasFile('url')) {
            $imageUpload = request()->file('url');
            $imageName = time() .'.'. $imageUpload->getClientOriginalExtension();
            $imagePath = public_path('storage/IMGS/imgs_produits/');    
            $imageUpload->move($imagePath, $imageName);
            $image->url = 'storage/IMGS/imgs_produits/' . $imageName;
            $data['url'] = $image->url;
        }

        $image->update($data);
        return $image;
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
