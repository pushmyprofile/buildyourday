<div class="top-bar">
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
			<li><a href="{{ route('logout') }}" class="button">Log Out</a></li>
			@else
			<li><a href="{{ route('register') }}" class="button large">Sign Up</a></li>
			<li><a href="{{ route('login') }}" class="button large">Login</a></li>
			@endif
		</ul>
	</div>
</div>