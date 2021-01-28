@extends('layout')

@section('contenu')
    <h1>News Feed</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <span>{{ $post->created_at }}</span>
                <h4>{{ $post->title }}</h4>
                <p>{{ $post->contenu }}</p>
                <div><img src="{{ $post->url_image }}" alt="postImage"></div>
            </li>
        @endforeach
    </ul>
@endsection
