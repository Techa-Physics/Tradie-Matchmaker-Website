@extends('layouts.default')

@section('body')
<?php
    $page_title="Edit Advertisement";
?>
<h1><center>Edit Advertisement</center></h1>

{!! Form::open(['action' => ['AdvertisementsController@update', $ad->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <?php
        //Business name
        echo Form::label('name', 'Business Name');
        echo Form::text('name', $ad->name, ['class' => 'form-control', 'placeholder' => 'Business Name']);
    ?></br>

    <?php
    // Service type
        $list = ['' => $service->category] + $categories;
        echo Form::label('service', 'Service Type');?></br><?php
        echo Form::select('service', $list, $service->category);
        //echo Form::select('service', [0,1,2,3,4,5,6,7,8,9], 5);
    ?></br></br>

    <?php
    // Description
        echo Form::label('body', 'Short Description');
        echo Form::textarea('body', $ad->body,  ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description', 'size' => '15x1']);
    ?></br>

    <?php
    // Quote
        echo Form::label('quote', 'Quote price ($)');
        echo Form::text('quote', $ad->quote, ['class' => 'form-control', 'placeholder' => 'example: 0, 50, 100, ...']);
    ?></br>

     <?php
    // Location
        echo Form::label('town', 'Town');
        echo Form::text('town', $ad->town, ['class' => 'form-control', 'placeholder' => 'eg. Sunbury']);
    ?></br>
    
    <?php
        echo Form::label('postcode', 'Postcode');
        echo Form::text('postcode', $ad->postcode, ['class' => 'form-control', 'placeholder' => 'eg. 3429']);
    ?></br>

    <?php
    // Phone Number
        echo Form::label('phone', 'Contact Number');
        echo Form::text('phone', $ad->phone, ['class' => 'form-control', 'placeholder' => 'eg. 0412345678']);
    ?></br>

    <?php
    // Max working distance
        echo Form::label('max_dist', 'Maximum working distance (km)');
        echo Form::text('max_dist', $ad->max_dist, ['class' => 'form-control', 'placeholder' => 'eg. 25']);

    ?>
    </br>
    <a href="/profile" class="btn btn-danger">Cancel</a>

    <?php
        echo Form::hidden('_method','PUT');
        echo Form::submit('Update', ['class'=>'btn btn-primary']);
    ?>
{!! Form::close() !!}

@endsection 