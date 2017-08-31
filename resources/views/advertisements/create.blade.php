@extends('layouts.default')


@section('body')
<?php
    $page_title="Create Advertisement";
?>

<h1><center>Create Advertisement</center></h1>
{!! Form::open(['action' => 'AdvertisementsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <?php
        //Business name
        echo Form::label('name', 'Business Name');
        echo Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Business Name']);
    ?></br>

    <?php
    // Service type 
        $list = ['' => 'Select category'] + $categories;
        echo Form::label('service', 'Service Type');?></br><?php
        echo Form:: select('service', $list);
    ?></br></br>

    <?php
    // Description
        echo Form::label('body', 'Short Description');
        echo Form::textarea('body', '',  ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description', 'size' => '15x1']);
    ?></br>

    <?php
    // Location
        echo Form::label('location', 'Location');
        echo Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'eg. Sunbury, 3429']);
    ?></br>

    <?php
    // Phone Number
        echo Form::label('phone', 'Contact Number');
        echo Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'eg. 0412345678']);
    ?></br>

    <?php
    // Max working distance
        echo Form::label('max_dist', 'Maximum working distance (km)');
        echo Form::text('max_dist', '', ['class' => 'form-control', 'placeholder' => 'eg. 25']);
    ?>
    </br>
    
    <?php
        echo Form::submit('Submit', ['class'=>'btn btn-success']);
    ?>

    <a href="/home" class="btn btn-danger">Cancel</a>
{!! Form::close() !!}
@endsection