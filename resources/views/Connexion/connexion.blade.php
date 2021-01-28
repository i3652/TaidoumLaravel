@extends('layout')

@section('contenu')
    <div class="card mt-5">
        <div class="card-body">
            <h4>Connexion</h4>
            <form action="/connexion" method="post" class="mt-3 mb-3">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    @if ($errors->has('email'))
                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('email') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    @if ($errors->has('password'))
                        <small id="passwordHelp" class="form-text text-muted">{{ $errors->first('password') }}</small>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Login </button>
            </form>
        </div>

    </div>

@endsection
