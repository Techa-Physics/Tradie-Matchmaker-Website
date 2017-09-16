@extends('layouts.default')


@section('body')
<?php
    $page_title="Your Matches";
?>

<h1><center>Your Matches</center></h1>

@if($count > 0)
    @if(count($ads) > 0)
        @foreach($ads as $ad)
            <?php
                $distance = $search->getDistance($ad->latitude, $ad->longitude, $search->latitude, $search->longitude);

                $rating = 0;
                $times = 0;
                foreach($reviews as $review)
                {
                    if($review->ad_id == $ad->id)
                    {
                        $rating += $review->rating;
                        $times ++;  
                    }
                }
                $average = $rating/$times;
            ?>
            @if($distance < $ad->max_dist)
                @if($times > 0)
                    @if($average >= $search->rating)
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
                    @endif
                @else
                    <p>There are no matches. Try lowering your search rating.</p>
                @endif
            @endif 
        @endforeach
        <div class='text-center'> 
            <?php echo $ads->render(); ?>
        </div>
    @else
        <p>Sorry! There is currently no ads at the moment. Please come back later.</P>
    @endif
@else
    <p>Sorry! There is no advertisements for that service type near your location.</p>
@endif
<p>Change your search here    <a href='/searches/{{$search->id}}/edit' class='btn btn-warning'>Edit</a></p>

@endsection