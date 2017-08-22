@extends('layouts.default')
@section('body')
<?php
    $page_title="Register";
?>

<h1>Register</h1>

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <!-- Name -->
    <div>
        Name
        <input id='name' type="text" name="name" value="{{ old('name') }}" required autofocus>
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <!-- Email -->
    <div>
        Email: 
        <input id='email' type="email" name="email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <!-- Password -->
    <div>
        Password: 
        <input id='password' type="password" name="password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <!-- Confirm Password -->
    <div>
        Confirm Password: 
        <input type="password" name="password_confirmation" required>
    </div>
    <!-- Account type -->
    <div>
        Account Type: 
        <input type="radio" name='role' value='Personal' >Personal
        <input type="radio" name='role' value='Business' >Business
        
        @if ($errors->has('role'))
            <span class="help-block">
                <strong>{{ $errors->first('role') }}</strong>
            </span>
        @endif
        <div>
            <small>Personal Account: Ables the user to search for tradies.</small>
        </div>
        <div>
            <small>Business Account: For business use only, enables the user to create and post ads.</small>
        </div>
    </div>

    <!-- Submit Button -->
    <div>
        <button type="submit" class='btn btn-success'>Register</button>
    </div>
</form>

@endsection