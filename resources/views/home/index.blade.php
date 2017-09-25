@extends('layouts.default')
@section('body')
<?php
    $page_title="Welcome";
?>
		
	<div class="textathome">
		<h1>Where's My Tradie!</h1>
	    <p>Welcome to Where's My Tradie</p>
	    @if(Auth::check())

	    @else
	    <p>Please Login or Register.</p>
	    <p>
	        <a class = 'btn btn-primary btn-lg' href = '/auth/login' role = 'button'   >Login</a> |
	        <a class = 'btn btn-success btn-lg' href = '/auth/register' role = 'button'>Register</a>
	    </p> 
	    @endif
	</div>

<div class="bottombar">
	<div class="slideshow" style="max-width:1200px">
            <img class="slideme" src="{{ URL::to('pictures/carrylog.png') }}" width"2000" height="513" alt="http://www.jimsbuildingmaintenance.com.au/images/stories/finding-the-right-tradie.jpg" style="width:100%">
            <img class="slideme" src="{{ URL::to('pictures/plumber.png') }}" width"2000" height="513" alt="https://adelaide.homegiraffe.com.au/wp-content/uploads/2015/01/Forestville-5035.jpg?quality=100.3016070710090" style="width:100%">
            <img class="slideme" src="{{ URL::to('pictures/carpenter.png') }}" width"2000" height="513" alt="http://www.sewctc.org/uploads/7/6/1/2/7612415/carpenter1-jpeg_orig.jpg" style="width:100%">
   	</div>
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slideme");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}
</script>
   	 		
   	 		@endsection
