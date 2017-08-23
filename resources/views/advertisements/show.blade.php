@extends('layouts.default')

@section('body')
<?php
    $page_title="{$ad->name}";
?>
    <h1>{{$ad->name}}</h1>   
    
    <div>
        <label>Service type: {{$ad->service}}</label></br>
        <label>Description: {{$ad->body}}</label></br></br>
        
        <label>Contact Information:</label></br>
        <label>{{ $user->name }} </label></br>
        <label>Phone: {{$ad->phone}}</label></br>
        <label>Email: {{$ad->email}}</label></br>
        <label>Location: {{$ad->location}}</label></br>

    </div>
    <small>Created on {{$ad->created_at}}</small>
    <div>
        <a href="/advertisements" class="btn btn-primary">Back</a>
        <a href="/" class="btn btn-success">Home</a>

        
    </div>
@endsection