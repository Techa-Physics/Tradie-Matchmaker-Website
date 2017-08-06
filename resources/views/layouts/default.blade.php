<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.nav')
        
        <div class="container body-content">
            @yield('body')
            
            <footer>
                @include('includes.footer')
            </footer>
        </div>
        
        @include('includes.scripts')
    </body>
</html>