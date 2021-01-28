@extends('layout')

@section('contenu')
    {{-- <form action="/inscription" method="post">
        {{ csrf_field() }}

        <input type="email" name="email" placeholder="Email" value={{ old('email') }}>
        @if ($errors->has('email'))
            <p>Email is mandatory</p>
        @endif
        <input type="sring" name="name" placeholder="Name" value={{ old('name') }}>
        @if ($errors->has('name'))
            <p>Name is mandatory</p>
        @endif
        <input type="password" name="password" placeholder="Password">
        @if ($errors->has('password'))
            <p>Password is mandatory</p>
        @endif
        <input type="password" name="password_confirmation" placeholder="Confirmation password">
        @if ($errors->has('password_confirmation'))
            <p>Password confirmation is mandatory</p>
        @endif
        <input type="submit" value="Valider">


    </form> --}}

    <div class="card bg-light mt-5 shadow">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">S'INSCRIRE</h4>
            <p class="text-center">Créer un compte gratuitement</p>
            <p>
                <a href="" id="btn-twitter" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Se connecter
                    avec Twitter</a>
                <a href="" id="btn-facebook" class="btn btn-block btn-facebook""> <i class=" fab fa-facebook-f"></i>   Se
                    connecter avec
                    Facebook</a>
            </p>
            <p class="divider-text">
                <span class="bg-light">OR</span>
            </p>
            <form action="/inscription" method="post">
                {{ csrf_field() }}
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="name" class="form-control" placeholder="Nom complet" type="text">
                </div>
                @if ($errors->has('neme'))
                    <small id="nameHelp" class="form-text text-danger">{{ $errors->first('name') }}</small>
                @endif
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Adresse mail" type="email">
                </div>
                @if ($errors->has('email'))
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('email') }}</small>
                @endif
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="password" class="form-control" placeholder="Choisir un mot de passe" type="password">

                </div>
                @if ($errors->has('password'))
                    <small id="passwordHelp" class="form-text text-danger">{{ $errors->first('password') }}</small>
                @endif
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="password_confirmation" class="form-control" placeholder="Confirmer le mot de passe"
                        type="password">

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Créer un compte </button>
                </div>
                <p class="text-center">Vous avez déjà un compte ? <a href="/connexion">Connexion</a> </p>
            </form>
        </article>
    </div>

    </div>
    </article>

@endsection
