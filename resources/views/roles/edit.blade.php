@extends('master')

@section('content')

<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Formulaire d'enregistrement rôles</h5>
            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('roles.update', $role->id) }}">
                @csrf
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="lastname">Rôle</label>
                    <div>
                        <input type="text" class="form-control" id="role" name="role" placeholder="Entrer la rôle" value="{{ old('name') ? old('name') : $role->name }}" />
                    </div>
                </div>

                <div class="position-relative form-group">
                    <label for="exampleText" class="">Description</label>
                    <textarea name="description" id="exampleText" class="form-control" value="{{ old('description') ? old('description') : $role->description }}"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="enregistrer" value="Enregistrer">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection