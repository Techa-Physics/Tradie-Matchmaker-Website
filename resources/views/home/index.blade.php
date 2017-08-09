@extends('layouts.default')
@section('body')
<?php
    $page_title="Welcome";
?>

<div class='jumbotron text-center'>
    <h1>Where's My Tradie!</h1>
    <p>Welcome to Where's My Tradie</p>
    <p>Please Login, Register, or Advertise your business.</p>
    <p>
        <a class = 'btn btn-primary btn-lg' href = '/login' role = 'button'   >Login</a>
        <a class = 'btn btn-success btn-lg' href = '/register' role = 'button'>Register</a>
        <a class = 'btn btn-warning btn-lg' href = '/register' role = 'button'>Advertise</a>
    </p> 
</div>

@endsection
