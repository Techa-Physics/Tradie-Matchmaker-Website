<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body class="bodybackgroundcolor">
        @include('includes.nav')
        
        <div class="container body-content">

            @include('includes.message')
            @yield('body')
        </div>
            <footer>
                @include('includes.footer')
            </footer>
       
        
        @include('includes.scripts')
    </body>
</html>