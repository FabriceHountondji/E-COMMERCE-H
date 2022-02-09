@extends('master')

@section('content')

<div class="app-main__inner">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Formulaire d'enregistrement acteurs</h5>
            <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{ route('acteurs.store', Route::currentRouteName()) }}">
                @csrf
                <div class="form-group">
                    <label for="firstname">Prénom(s)</label>
                    <div>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname">Nom</label>
                    <div>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Numéro de Téléphone</label>
                    <div>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="N-Téléphone" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datenat">Date de naissance</label>
                    <input type="text" class="form-control" data-toggle="datepicker-year" name="birthday" required/>
                </div>

                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">Sexe</label>
                    <select name="sexe" id="exampleSelect" class="form-control">
                        <option>Masculin</option>
                        <option>Féminin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="lastname">Adresse</label>
                    <div>
                        <input type="text" class="form-control" id="adresse" name="address" placeholder="Adresse" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <div>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required/>
                    </div>
                </div>

                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">Fonction</label>
                    <select name="fonction_id" id="exampleSelect" class="form-control">
                        @foreach ($fonctions as $fonction)
                            <option value="{{ $fonction->id }}"> {{ $fonction->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="position-relative form-group">
                    <label for="exampleSelect" class="">Compte utilisateur</label>
                    <select name="user_id" id="exampleSelect" class="form-control">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}"> {{ $user->email }}</option>
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
