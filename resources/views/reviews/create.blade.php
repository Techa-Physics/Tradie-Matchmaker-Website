@extends('layouts.default')

@section('body')

<?php
    $page_title="create review";
?>

<h1><center>Create Review</center></h1>  
<h3>Review for {{ $ad->name }}</h3>
{!! Form::open(['action' => 'ReviewsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

    <?php
        // name
        echo Form::label('name', 'Review Title');
        echo Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Title']);
    ?></br>

    <?php
        echo Form::label('rating', 'Rating');?></br><?php
        echo Form::selectRange('rating', 0,5);
    ?></br>

    <?php
    // Description
        echo Form::label('description', 'Review Description');
        echo Form::textarea('description', '',  ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description', 'size' => '15x5']);
    ?></br>
    
    <?php
        echo Form::hidden('ad_id', $ad->id, ['class' => 'form-control']);
        echo Form::submit('Submit', ['class'=>'btn btn-success']);
    ?>

    <a href="/home" class="btn btn-danger">Cancel</a>

{!! Form::close() !!}
@endsection