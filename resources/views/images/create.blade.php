@extends('dashboard')

@section('content')

<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Formulaire d'enregistrement image</h5>
            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('images.store', Route::currentRouteName()) }}" enctype="multipart/form-data">
                @csrf

                <label for="exampleFile">Choisir l'image</label>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" name="url">
                    <label class="input-group-text" for="inputGroupFile02">Télécharger</label>
                </div>

                <div class="position-relative form-group">
                    <label for="exampleText" class="">Description</label>
                    <textarea name="description" id="exampleText" class="form-control" placeholder="Entrer la description"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="enregistrer" value="Enregistrer">Enregister</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
