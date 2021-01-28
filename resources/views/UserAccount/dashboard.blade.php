@extends('layout')
@section('contenu')
    <div class="container">
        <h2 class="text-center">Dashboard of {{ $user->email }}</h2>
        <h3 class="mt-5">Modify my profile</h3>
        <form action="/modifyUser">
            {{ csrf_field() }}

            <div class=" form-group">
                <label for="email">Email : </label>
                <input type="email" name="email" placeholder="Enter your email" value="{{ $user->email }}"
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="name">Name : </label>
                <input type="text" name="name" placeholder="Enter your name " value="{{ $user->name }}"
                    class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Modify my profile</button>
        </form>
        <h3 class="mt-5">Write your post:</h3>
        <form action="/new_post" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="InputTitle" class='form-label'>Title : </label>
                <input name="title" class="form-control" id="InputTitle" placeholder="Titre du post" type="text"
                    value="{{ old('title') }}">
            </div>
            @if ($errors->has('title'))
                <small id="titleHelp" class="form-text text-danger">{{ $errors->first('title') }}</small>
            @endif
            <div class="form-group">
                <label for="InputContent" class='form-label'>Content : </label>
                <textarea class="form-control " name="content" id="TextareaContent"
                    placeholder="Write your post"></textarea>

            </div>
            @if ($errors->has('content'))
                <small id="contentHelp" class="form-text text-danger">$errors->first('content')</small>
            @endif


            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Validate the adding of your post </button>
            </div>
        </form>


    </div>


@endsection
