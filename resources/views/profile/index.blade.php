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
                        <div class="panel-heading"><h3>Your advertisemensts</h3> </div>
                        <div class="panel-body">
                                       
                        @if(count($ads) > 0)
                        <table class='table table-striped'>
                            <tr>
                                <th>Business</th>
                                <th>Service</th>

                                <th><center>Views</center></th>
                                <th><center>Rating</center></th>

                                <th></th>
                            </tr>
                            @foreach($ads as $ad)
                                <tr>
                                    <td>{{ $ad->name }}</td>
                                    <td>{{ $ad->service }}</td>

                                    <td><center>{{ $ad->views }}</center></td>
                                    <td><center>{{ 0/5 }}</center></td>

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