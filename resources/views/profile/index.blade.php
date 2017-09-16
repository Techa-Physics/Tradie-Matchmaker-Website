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
                
                    @if(Auth::user()->hasRole("Business"))
                        <div class="panel-heading"><h3>Your advertisements</h3> </div>
                        <div class="panel-body">
                                       
                        @if(count($ads) > 0)
                        <table class='table table-striped'>
                            <tr>
                                <th>Business</th>
                                <th>Service</th>
                                <th></th>
                            </tr>
                            @foreach($ads as $ad)
                                <tr>
                                    <td>{{ $ad->name }}</td>
                                    <td>{{ $ad->service }}</td>
                                    <td>
                                        {!!Form::open(['action' => ['AdvertisementsController@destroy', $ad->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        <a href='/advertisements/{{$ad->id}}' class='btn btn-success'>View</a>
                                        <a href='/advertisements/{{$ad->id}}/edit' class='btn btn-warning'>Edit</a>
                                        <?php
                                            echo Form::hidden('_method', 'DELETE');
                                            echo Form::submit('Delete', ['class' => 'btn btn-danger']);
                                        ?>
                                        {!!Form::close()!!}
                                        
                                    </td>                                
                                </tr>
                            @endforeach
                        </table>      
                        @endif       
                    @elseif(Auth::user()->hasRole("Personal"))
                        <div class="panel-heading"><h3>Your searches</h3> </div>
                        <div class="panel-body">

                        @if(count($searches) > 0)
                        <table class='table table-striped'>
                            <tr>
                                <th>Your Search</th>
                                <th>Location</th>
                                <th><center>Quote Range</center></th>
                                <th></th>
                            </tr>
                            @foreach($searches as $search)
                                <tr>
                                    <td>{{ $search->service }}</td>
                                    <td>{{ $search->town }}, {{ $search->postcode }}</td>
                                    @if( $search->quote_min  ==  $search->quote_max )
                                        <td><center>${{ $search->quote_min }}</center></td>
                                    @else
                                        <td><center>${{$search->quote_min}} - ${{$search->quote_max}}</center></td>
                                    @endif
                                    <td>
                                        {!!Form::open(['action' => ['SearchesController@destroy', $search->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        <a href='/searches/{{ $search->id }}' class='btn btn-success'>Search</a>
                                        <a href='/searches/{{$search->id}}/edit' class='btn btn-warning'>Edit</a>
                                        <?php
                                            echo Form::hidden('_method', 'DELETE');
                                            echo Form::submit('Delete', ['class' => 'btn btn-danger']);
                                        ?>
                                        {!!Form::close()!!}
                                    </td>                                
                                </tr>
                            @endforeach
                        </table>
                        @endif
                    @else
                        <div class="panel-heading"><h3>Admin</h3> </div>
                        <div class="panel-body">
                    @endif     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection