@extends('master')

@section('content')

<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Formulaire de modification fonctions</h5>
            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="route('fonctions.update', $fonction->id)">
                @csrf
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="lastname">Fonction</label>
                    <div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Entrer la fonction" value="{{ old('name') ? old('name') : $fonction->name }}" />
                    </div>
                </div>

                <div class="position-relative form-group">
                    <label for="exampleText" class="">Description</label>
                    <textarea name="description" id="exampleText" class="form-control" value="{{ old('description') ? old('description') : $fonction->description }}"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="enregistrer" value="Enregistrer">Enregister les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection