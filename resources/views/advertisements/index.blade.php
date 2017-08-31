@extends('layouts.default')

@section('body')
<?php
    $page_title="Latest Advertisements";
?>

<h1>Latest Advertisements</h1>

@if(count($ads) > 0)
    @foreach($ads as $ad)
    <div class='well'>

        <h3><a href='/advertisements/{{$ad->id}}'>{{$ad->name}} ({{$ad->service}})</a></h3> 

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

@endsection