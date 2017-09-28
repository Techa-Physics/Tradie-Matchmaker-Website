<?php
    use App\Palette;

    $curPalette = Palette::find(1)->currentpalette;
    $paletteDark = "palette-". $curPalette ."-dark";
    $paletteMedium = "palette-". $curPalette ."-medium";
    $paletteLight = "palette-". $curPalette ."-light";
?>

<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body class="bodybackgroundcolor {{ $paletteMedium }}">
        @include('includes.nav', ['paletteDark' => $paletteDark])
        
        <div class="container body-content {{ $paletteLight }}">
            @include('includes.message')
            
            @yield('body')
        </div>
            <footer>
                @include('includes.footer')
            </footer>
       
        
        @include('includes.scripts')
    </body>
</html>