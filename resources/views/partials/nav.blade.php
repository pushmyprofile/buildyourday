<div class="title-bar" data-responsive-toggle="mobile-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="full reveal show-for-small-only" id="mobile-menu" data-reveal data-animation-in="fade-in" data-animation-out="fade-out"> 
<h2 class="text-center">Menu</h2>
<ul class="menu vertical">
<li><a href="/">Home</a></li>
<li><a href="{{ URL::action('PagesController@howitworks') }}">How It Works</a></li>
			<li><a href="{{ URL::action('PagesController@pricing') }}">Pricing</a></li>
			<li><a href="{{ URL::action('PagesController@aboutus') }}">About Us</a></li>
			<li><a href="#">Blog</a></li> 
		</ul>
<button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
</button>
</div>

<div>
  <div id="example" data-margin-top="0" style="width:100%;" data-margin-bottom="0" data-top-anchor="topAnchorExample" data-btm-anchor="bottomOfContentId:bottom">
<div class="top-bar hide-for-small-only" data-magellan>
	<div class="top-bar-left">		
			<a href="/"><img class="logo" src="/images/logo.png" alt="BuildYourDay"></a>  
		</div>
		<div class="top-bar-right">
		<ul class="menu">
			@if(Auth::check())

			@else
			<li><a href="{{ URL::action('PagesController@howitworks') }}">How It Works</a></li>
			<li><a href="{{ URL::action('PagesController@pricing') }}">Pricing</a></li>
			<li><a href="{{ URL::action('PagesController@aboutus') }}">About Us</a></li>
			<li><a href="#">Blog</a></li> 
			@endif

			@if(Auth::check())
			<li>Welcome {{ Auth::user()->name }} </li>
			<li><a href="{{ URL::action('DashboardController@home') }}" class="button large>">Dashboard</a></li>
			<li><a href="{{ route('logout') }}" class="button">Log Out</a></li>
			@else
			<!--<li><a data-open="exampleModal1">Sign Up</a></li>-->
			<!--<li><a href="{{ route('register') }}" class="button large">Sign Up</a></li>-->
			<li><a data-open="signup" class="button large">Sign Up</a></li>
			<li><a data-open="login" class="button large">Login</a></li>
			<!--<li><a href="{{ route('login') }}" class="button large">Login</a></li>-->
			@endif
		</ul>
	</div>
</div>
</div>
</div>