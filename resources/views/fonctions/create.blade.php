@extends('master')

@section('content')

<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Formulaire d'enregistrement fonctions</h5>
            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('fonctions.store', Route::currentRouteName()) }}">
                @csrf
                
                <div class="form-group">
                    <label for="lastname">Nom de la fonction</label>
                    <div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Entrer la fonction" />
                    </div>
                </div>

                <div class="position-relative form-group">
                    <label for="exampleText" class="">Description</label>
                    <textarea name="description" id="exampleText" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="enregistrer" value="Enregistrer">Enregister</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection