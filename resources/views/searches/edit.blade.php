@extends('layouts.default')


@section('body')
<?php
    $page_title="Edit your search";
?>

<h1><center>Edit search</center></h1>
<p>The marked with * are required.<p>
{!! Form::open(['action' => ['SearchesController@update',$search->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
 
    <?php
    // Service type 
        $list = ['' => 'Select category'] + $categories;
        echo Form::label('service', 'Service Type*');?></br><?php
        echo Form:: select('service', $list, $search->service);
    ?></br></br>

    <?php
    // Quote min
        echo Form::label('quote_min', 'Minimum Quote Price ($)');
        echo Form::text('quote_min', $search->quote_min, ['class' => 'form-control', 'placeholder' => 'eg. 0,10,20,...']);
    ?></br>

    <?php
    // Quote max
        echo Form::label('quote_max', 'Maximum Quote Price ($)');
        echo Form::text('quote_max', $search->quote_max, ['class' => 'form-control', 'placeholder' => 'eg. 80, 90, 100, ...']);
    ?></br>

    <?php
    // Location
        echo Form::label('town', 'Town*');
        echo Form::text('town', $search->town, ['class' => 'form-control', 'placeholder' => 'eg. Sunbury']);
    ?></br>
    
    <?php
        echo Form::label('postcode', 'Postcode*');
        echo Form::text('postcode', $search->postcode, ['class' => 'form-control', 'placeholder' => 'eg. 3429']);
    ?></br>

    <?php
    // minimum rating
        echo Form::label('rating', 'Minimum Rating');?></br><?php
        echo Form::selectRange('rating', 0,5, $search->rating);
    ?>
    </br></br>
 
    <?php
        echo Form::hidden('_method','PUT');
        echo Form::submit('Update', ['class'=>'btn btn-primary btn-lg']);
    ?>

    <a href="/profile" class="btn btn-primary btn-lg">Cancel</a>

{!! Form::close() !!}
@endsection