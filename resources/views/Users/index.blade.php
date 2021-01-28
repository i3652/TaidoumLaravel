@extends('layout')

@section('contenu')
    <div class="container">
        <h2>
            Voici la liste des utilisateur :
        </h2>
    </div>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Date de création</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td><a href="{{ route('Show.User', ['id' => $user->id]) }}">{{ $user->email }}</a></td>
                    <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
