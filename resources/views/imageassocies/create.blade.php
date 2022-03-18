@extends('master')

@section('content')

<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Formulaire d'enregistrement des images associées aux produits</h5>
            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('imageassocies.store', Route::currentRouteName()) }}">
                @csrf

                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">Produit associé</label>
                    <select name="produit_id" id="exampleSelect" class="form-control">
                        @foreach ($produits as $produit)
                            <option value="{{ $produit->id }}"> {{ $produit->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">Image à associer</label>
                    <select name="image_id" id="exampleSelect" class="form-control">
                        @foreach ($images as $image)
                            <option value="{{ $image->id }}"> {{ $image->url }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="enregistrer" value="Enregistrer">Enregister</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop
