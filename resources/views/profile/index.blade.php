@extends('layouts.default')
@section('body')
<?php
    $page_title="Profile";
    $user = Auth::user();
?>

<h1>Hello, {{ $user->name }}</h1>
<p>Email: {{ $user->email }}</p>
<p>Joined: {{ $user->created_at }}</p>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                    @if(Auth::user()->hasRole("Business"))
                        <h3>Your advertisemensts</h3>
                        <a href='{{ url('/advertisements/create') }}' class='btn btn-primary'>Create Ad</a>
                    @else(Auth::user()->hasRole("Personal"))
                        <h3>Your searches</h3>
                        <a href='{{ url('/about') }}' class='btn btn-primary'>New search</a>
                    @endif
                    

                    <table class='table table-striped'>
                        <tr>
                             @if(Auth::user()->hasRole("Business"))
                                <th><h4>Ad Name</h4></th>
                            @else(Auth::user()->hasRole("Personal"))
                                <th><h4>Search Name</h4></th>
                             @endif
                            
                            <th></th>
                        </tr>
                        @foreach($ads as $ad)
                            <tr>
                                <td>{{ $ad->name }}</td>
                                <td>
                                    <a href='/advertisements/{{$ad->id}}' class='btn btn-success'>View</a>
                                    <a href='/advertisements/{{$ad->id}}/edit' class='btn btn-warning'>Edit</a>
                                </td>                                
                            </tr>
                        @endforeach
                    </table>                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection