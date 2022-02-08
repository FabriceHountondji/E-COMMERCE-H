@extends('master')

@section('content')

<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Formulaire d'enregistrement produits</h5>
            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('produits.store', Route::currentRouteName()) }}">
                @csrf
                <!-- <div class="form-group">
                    <label for="firstname">Image principale</label>
                    <div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Mom du produit" />
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="name">Nom</label>
                    <div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Désignation du produit" />
                    </div>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleText" class="">Description</label>
                    <textarea name="description" id="exampleText" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="phone">Prix</label>
                    <div>
                        <input type="text" class="form-control" id="prix" name="prix" placeholder="Prix du produit" />
                    </div>
                </div>

                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">Catégorie</label>
                    <select name="categorie_id" id="exampleSelect" class="form-control">
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}"> {{ $categorie->name }}</option>
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
