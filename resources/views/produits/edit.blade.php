@extends('master')

@section('content')

<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Formulaire de modification produits</h5>
            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('produits.update', $produit->id) }}">
                @csrf
                {{ method_field('PUT') }}

                <!-- <div class="form-group">
                    <label for="firstname">Image principale</label>
                    <div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Mom du produit" value="{{ old('name') ? old('name') : $produit->name }}" required/>
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="lastname">Nom</label>
                    <div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nom du produit" value="{{ old('name') ? old('name') : $produit->name }}" required />
                    </div>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleText" class="">Description</label>
                    <textarea name="description" id="exampleText" class="form-control"  required > {{ old('description') ? old('description') : $produit->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="phone">Prix</label>
                    <div>
                        <input type="text" class="form-control" id="prix" name="prix" placeholder="Prix du produit" value="{{ old('prix') ? old('prix') : $produit->prix }}" required/>
                    </div>
                </div>

                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">Catégorie</label>
                    <select name="categorie_id" id="exampleSelect" class="form-control">
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}" {{ $produit->categorie->name == $categorie->name ? 'selected' : '' }}> {{ $categorie->name }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="enregistrer" value="Enregistrer">Enregister les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop
