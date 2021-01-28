@extends('layout')






@section('contenu')
    <div class="card mt-3 ">
        <h1 class="ml-7">Bienvenue dans notre premier site Taidoum</h1>
        <a href="{{ url('/connexion') }}" class="btn btn-primary btn-lg mb-3 type  =" button">You're already a user? Click
            here!</a>
        <a href="{{ url('inscription') }}" class="btn btn-primary btn-lg mb-3 type =" button">You want to join the team?
            Regist </a>

    </div>
@endsection
