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
        echo Form::text('name', $ad->name, ['class' => 'form-control']);

    // Service type

        echo Form::label('service', 'Service Type');
        echo Form::text('service', $ad->service, ['class' => 'form-control']);

    // Description
        echo Form::label('body', 'Short Description');
        echo Form::textarea('body', $ad->body,  ['id' => 'article-ckeditor', 'class' => 'form-control', 'size' => '15x1']);

    // Location
        echo Form::label('location', 'Location');
        echo Form::text('location', $ad->location, ['class' => 'form-control']);

    // Phone Number
        echo Form::label('phone', 'Contact Number');
        echo Form::text('phone', $ad->phone, ['class' => 'form-control']);

    // Max working distance
        echo Form::label('max_dist', 'Maximum working distance (km)');
        echo Form::text('max_dist', $ad->max_dist, ['class' => 'form-control']);
    ?>
    </br>
    <a href="/profile" class="btn btn-danger">Cancel</a>

    <?php
        echo Form::hidden('_method','PUT');
        echo Form::submit('Update', ['class'=>'btn btn-primary']);
    ?>
{!! Form::close() !!}

@endsection 