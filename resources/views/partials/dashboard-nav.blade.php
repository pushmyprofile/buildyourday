<div class="top-bar">
	<div class="top-bar-left">		
			<a href="/"><img class="logo" src="/images/logo.png" alt="BuildYourDay"></a>
		</div>
		<div class="top-bar-right">
		
		<ul class="menu icon-top">
			@if(Auth::check())
			  <li><a href="{{ URL::action('ProfilesController@show') }}"><i class="fa fa-user"></i> <span>Manage Profile</span></a></li>
			  <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> <span>Log Out</span></a></li>
  			@else
			<li><a href="{{ route('register') }}" class="button large">Sign Up</a></li>
			<li><a href="{{ route('login') }}" class="button large">Login</a></li>
			@endif
</ul>
	</div>
</div>