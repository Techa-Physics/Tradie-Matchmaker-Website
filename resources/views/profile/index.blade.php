@extends('layouts.default')
@section('body')
<?php
    $page_title="Profile";
    $user = Auth::user();
?>

<h1>Hello, {{ $user->name }}</h1>
<p>Email: {{ $user->email }}</p>
<p>Joined: {{ $user->created_at }}</p>

@endsection