<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.nav')
        
        <div class="container body-content">
            @include('includes.message')
            @yield('body')
            
            <footer>
                @include('includes.footer')
            </footer>
        </div>
        
        @include('includes.scripts')
    </body>
</html>