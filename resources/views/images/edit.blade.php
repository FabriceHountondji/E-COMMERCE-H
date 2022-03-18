@extends('master')

@section('content')

<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Formulaire de modification image</h5>
            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('images.update', $image->id) }}" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}

                <label for="exampleFile">Choisir l'image</label>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" name="url" >
                    <label class="input-group-text" for="inputGroupFile02">Télécharger</label>
                </div>
                
                <div class="position-relative form-group">
                    <label for="exampleText" class="">Description</label>
                    <textarea name="description" id="exampleText" class="form-control"> {{ old('description') ? old('description') : $image->description }} </textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="enregistrer" value="Enregistrer">Enregister les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
