@extends('layouts.default')
@section('body')
<?php
    $page_title="Welcome";
?>

<div class='jumbotron text-center'>
    <h1>Where's My Tradie!</h1>
    <p>Welcome to Where's My Tradie</p>
    @if(Auth::check())

    @else
    <p>Please Login or Regsiter.</p>
    <p>
        <a class = 'btn btn-primary btn-lg' href = '/auth/login' role = 'button'   >Login</a>
        <a class = 'btn btn-success btn-lg' href = '/auth/register' role = 'button'>Register</a>
    </p> 
    @endif
</div>

@endsection
