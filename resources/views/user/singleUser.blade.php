@extends('layouts.default')
@section('body')
<?php
    $page_title="User";
?>

<h1>User</h1>

@if(isset($user))
    <p>{{ $user->user_id }}</p>
    <p>{{ $user->user_email }}</p>
    <p>{{ $user->user_phone }}</p>

@else
    <br />
        <p>User not found</p>
    <br />
@endif

@stop