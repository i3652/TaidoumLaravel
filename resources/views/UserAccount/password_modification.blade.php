@extends('layout')

@section('contenu')
    <form action="/password_modification" method="post">
        {{ csrf_field() }}
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input name="password" class="form-control" placeholder="New password" type="password">

        </div>
        @if ($errors->has('password'))
            <small id="passwordHelp" class="form-text text-muted">Wrong password</small>
        @endif
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input name="password_confirmation" class="form-control" placeholder="Confirm your password" type="password">

        </div>
        @if ($errors->has('password_confirmation'))
            <small id="password_confirmationHelp" class="form-text text-muted">Are you sure that passwords are similar?
                Try!!</small>
        @endif
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Change your password</button>
        </div>
    </form>
@endsection
