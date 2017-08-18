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
            </ul>
        
		
			<ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li><a href="{{ url('/profile') }}">Your Profile</a></li>
                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
            @else
				<li><a href="{{ url('/auth/login') }}">Login</a></li>
				<li><a href="{{ url('/auth/register') }}">Register</a></li>
            @endif
			</ul>
		</div>
    </div>
</nav>