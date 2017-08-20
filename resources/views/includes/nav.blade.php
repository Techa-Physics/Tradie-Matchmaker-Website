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
        
            <!-- RIGHT SIDE OF NAVBAR -->
			<ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li><a href="{{ url('/profile') }}"><span class="glyphicon glyphicon-user"></span> Your Profile</a></li>
                <li><a href="{{ url('/auth/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            @else
				<li><a href="{{ url('/auth/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<li><a href="{{ url('/auth/register') }}"><span class="glyphicon glyphicon-user"></span> Register</a></li>
            @endif
			</ul>
		</div>
    </div>
</nav>