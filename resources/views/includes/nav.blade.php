<nav class="navbar navbar-inverse fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Where's My Tradie</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <li><a href="{{ url('/about') }}">About</a></li>
                

                <!-- @if(Auth::guest() || Auth::user()->hasRole("Personal") || Auth::user()->hasRole('Admin')) -->
                    <li><a href="{{ url('/advertisements') }}">Advertisements</a></li> 
                    <li><a href="{{ url('/searches/create') }}">Find My Tradie</a></li>                     
                <!-- @endif -->
               
                @if(Auth::user())
                    @if(Auth::user()->hasRole("Business"))
                        <li><a href="{{ url('/advertisements/create') }}">Create Advertisement</a></li>
                    @endif  
                @endif
                
            </ul>
        

            <!-- Right side of navagation bar -->
			<ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ url('/auth/login') }}"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>
                    <li><a href="{{ url('/auth/register') }}"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                @else
                    <li><a href="{{ url('/profile') }}"><span class="glyphicon glyphicon-user"></span> {{Auth::user()->name}}</a></li>
                    <li><a href="{{ url('/auth/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                @endif

			</ul>
		</div>
    </div>
</nav>