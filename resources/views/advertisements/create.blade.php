@extends('layouts.default')
@section('body')
<?php
    $page_title="Create Advertisement";
?>

<h1><center>Create Advertisement</center></h1>
<form method="POST" action="">
    {{ csrf_field() }}

        <!-- Business Name -->
        <div class='form-group'>
            <label for='name'>Name: </label>
            <input id='name' class='form-control' type="text" name="name" placeholder="e.g. Jim's Fencing" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <!-- Service Type -->
        <div class='form-group'>
            <label for='service'>Service Type: </label>
            <input id='service' class='form-control' type="text" name="service" 
                    placeholder="e.g. Painting, fencing, electrical, ..." required>
            @if ($errors->has('service'))
                <span class="help-block">
                    <strong>{{ $errors->first('service') }}</strong>
                </span>
            @endif
        </div>

        <!-- Business Description -->
        <div class='form-group'>
            <label for='body'>Business description: </label>
            <input id='body' class='form-control' type="text" name="body" 
                    placeholder="Short description of your business..." required>
            @if ($errors->has('body'))
                <span class="help-block">
                    <strong>{{ $errors->first('body') }}</strong>
                </span>
            @endif
        </div>

        <!-- Location -->
        <div class='form-group'>
            <label for='location'>Locaiton: </label>
            <input id='location' class='form-control' type="text" name="location"
                     placeholder="e.g. Sunbury, 3429" required>
                @if ($errors->has('location'))
                <span class="help-block">
                    <strong>{{ $errors->first('location') }}</strong>
                </span>
            @endif
        </div>

        <!-- Phone -->
        <div class='form-group'>
            <label for='phone'>Phone Number: </label>
            <input id='phone' class='form-control' type="text" name="phone" placeholder="e.g. 0412345678" required>
            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>

        <!-- Max Distance -->
        <div class='form-group'>
            <label for='max_dist'>Max Working Distance (km): </label>
            <input id='max_dist' class='form-control' type="text" name="max-dist" placeholder="e.g. 25" required>
            @if ($errors->has('max_dist'))
                <span class="help-block">
                    <strong>{{ $errors->first('max_dist') }}</strong>
                </span>
            @endif
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class='btn btn-success'>Submit</button>
            <button type="reset" class='btn btn-warning'>Reset</button>
        </div>

    </form>

@endsection