@extends('master')

@section('content')

<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Formulaire de modification des image associées aux produits</h5>
            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('imageassocies.update', $imageassocy->id) }}">
                @csrf
                {{ method_field('PUT') }}

                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">Question</label>
                    <select name="produit_id" id="exampleSelect" class="form-control">
                        @foreach (produits as produit)
                            <option value="{{ produit->id }}" {{ $imageassocy->produit->name == produit->name ? 'selected' : '' }}> {{ $produit->intitule }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">Réponse</label>
                    <select name="image_id" id="exampleSelect" class="form-control">
                        @foreach ($images as $image)
                            <option value="{{ $image->id }}"  {{ $imageassocy->image->url == $image->url ? 'selected' : '' }} > {{ $image->url }}</option>
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

@endsection
