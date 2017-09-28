@extends('layouts.default')
@section('body')
<?php
    $page_title="Change Website Palette";

    // $test_numPalettes = 11;
    // $test_perRow = 3;
    // $test_totalRows = ceil($test_numPalettes / $test_perRow);
    // $test_curRow = 1;
    // $test_curItem = 1;
    // $test_itemsLeft = $test_numPalettes;

    // <p>numPalettes {{ $test_numPalettes }}</p>
    // <p>perRow {{ $test_perRow }}</p>
    // <p>totalRows {{ $test_totalRows }}</p>
    // <p>curRow {{ $test_curRow }}</p> -->

    // @for ($i = 1; $i <= $test_totalRows; $i++)
    //     <p>{{ $i }}</p>
    //     {{ $itemsLeftRow = $i*$test_curRow - 5 }}

    //     @for ($k = $test_itemsLeft; $k <= 1; $k--)
            
    //     @endfor
    // @endfor
?>

<div>
    <a href="{{ url('/profile') }}" class="btn btn-info btn">Back</a>
    <h2 style="display: inline-block; text-indent: 30px;">Change Website Palette</h3>
</div>

<hr />

<div>
    <div class="row">
        <div class="col-sm-4 btn-group btn" name="1">
            <h3><?php echo link_to_action('PaletteController@update', "Palette 1", 1) ?></h3>
            <button type="button" class="btn btn-block palette-1-dark" style="color: white; margin: 0px">DARK</button>
            <button type="button" class="btn btn-block palette-1-medium" style="color: white; margin: 0px">MEDIUM</button>
            <button type="button" class="btn btn-block palette-1-light" style="margin: 0px">LIGHT</button>
        </div>
        <div class="col-sm-4 btn-group btn" name="2">
            <h3><?php echo link_to_action('PaletteController@update', "Palette 2", 2) ?></h3>
            <button type="button" class="btn btn-block palette-2-dark" style="color: white; margin: 0px">DARK</button>
            <button type="button" class="btn btn-block palette-2-medium" style="color: white; margin: 0px">MEDIUM</button>
            <button type="button" class="btn btn-block palette-2-light" style="margin: 0px">LIGHT</button>
        </div>
        <div class="col-sm-4 btn-group btn" name="3">
            <h3><?php echo link_to_action('PaletteController@update', "Palette 3", 3) ?></h3>
            <button type="button" class="btn btn-block palette-3-dark" style="color: white; margin: 0px">DARK</button>
            <button type="button" class="btn btn-block palette-3-medium" style="color: white; margin: 0px">MEDIUM</button>
            <button type="button" class="btn btn-block palette-3-light" style="margin: 0px">LIGHT</button>
        </div>
    </div>
</div>

@endsection