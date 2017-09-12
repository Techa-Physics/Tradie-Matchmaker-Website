@extends('layouts.default')


@section('body')
<?php
    $page_title="Your Matches";
?>

<h1><center>Your Matches</center></h1>

@if(count($ads) > 0)
    @foreach($ads as $ad)
    <div class='well'>

        <h3><a href='/advertisements/{{$ad->id}}'>{{$ad->name}} ({{$ad->service}})</a></h3> 
        @if($ad->quote == '0')
            <p><strong>Quote cost: </strong>FREE</p>
        @else
            <p><strong>Quote cost: </strong>{{$ad->quote}}</p>
        @endif 

        <p>{{$ad->body}}</p>
        <samll>Created on {{$ad->created_at}}</small>
    </div>
    @endforeach
    <div class='text-center'> 
        <?php echo $ads->render(); ?>
    </div>
@else
    <p>Sorry! There is currently no ads at the moment. Please come back later.</P>
@endif

<p>Change your search here    <a href='/searches/{{$search->id}}/edit' class='btn btn-warning'>Edit</a></p>

@endsection