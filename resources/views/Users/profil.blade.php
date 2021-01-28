@extends('layout')

@section('contenu')

    <div class="container border p-5 mt-3 position-relative">
        <h2>Name : {{ $user->name }}</h2>
        <h3>Email :{{ $user->email }}</h3>


        @auth
            <form action="{{ $user->email }}/follow" method="post">
                {{ csrf_field() }}
                @if (auth()
                ->user()
                ->follows($user))
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger">Unfollow</button>
                @else
                    {{ method_field('post') }}
                    <button type="submit" class="btn btn-success">Follow</button>
                @endif
            </form>

            <div class="row">
                <div class="col">
                    <h2>Followers : </h2>
                    @if (auth()
                ->user()
                ->following->isEmpty())
                        <h6>Followed by : </h6>

                    @else
                        <p>{{ auth()->user()->following->count() }}</p>

                        <div class="row">
                            @foreach (auth()->user()->following as $utilisateur)
                                <div class="col-xl-3">
                                    <a href="{{ url($utilisateur->email) }}"> {{ $utilisateur->email }}</a> <br>
                                    {{ $utilisateur->name }}
                                </div>
                            @endforeach
                        </div>

                    @endif
                </div>
            </div>


        @endauth

        <h2 class='text-center mt-3 mb-3'>Posts:</h2>
        <div class="row">

            @foreach ($posts as $post)
                <div class="col xl-6">
                    <div class="card mt-3">
                        <div class="card-header">
                            {{ $post->title }}
                        </div>
                        <div class="card-body">
                            {{ $post->content }}
                        </div>
                        <div class="card-footer">
                            {{ $post->user->email }}
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>



@endsection
