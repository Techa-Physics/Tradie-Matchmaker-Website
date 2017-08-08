@extends('layouts.default')
@section('body')
<?php
    $page_title="User";
?>

<h1>Users:</h1>

@foreach ($users as $user)
    <br />
    <p>User ID: {{ $user->user_id }}</p>
    <p>User Email: {{ $user->user_email }}</p>
    <p>User Phone: {{ $user->user_phone }}</p>
    <br />

@endforeach

@stop