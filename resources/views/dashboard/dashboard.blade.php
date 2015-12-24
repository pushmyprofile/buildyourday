@extends('layouts.dashboard')

@section('content')	
<div class="row">
<div class="large-12 columns">
<h1 class="text-center">Welcome {{ Auth::user()->name }} </h1>
</div>
</div>
<div class="row">
	<div class="small-12 large-12 columns">		
		<ul class="menu dashboard-menu icon-top">
		  <li class="large-3 columns"><a href="{{ URL::action('ProfilesController@show') }}"><i class="fa fa-plus-circle fa-5x"></i><span>Events</span></a></li>
	      <li class="large-3 columns"><a href="{{ URL::action('ProfilesController@show') }}"><i class="fa fa-envelope fa-5x"></i><span>Invitations</span></a></li>
          <li class="large-3 columns"><a href="{{ URL::action('ProfilesController@show') }}"><i class="fa fa-users fa-5x"></i><span>Manage Contacts</span></a></li>
		  <li class="large-3 columns"><a href="{{ URL::action('ProfilesController@show') }}"><i class="fa fa-wrench fa-5x"></i><span>Settings</span></a></li>
        </ul>
	</div>
</div>
<div class="row dashboard-activities">
<div class="large-6 columns">
<h3><i class="fa fa-list"></i>
Active Events</h3>
<p>No Events Found</p>
</div>
<div class="large-6 columns">
<h3><i class="fa fa-check-square-o"></i>
 Your To Do List </h3>
<p>Currently you have nothing to do! Relax!</p>
</div>

</div>


@endsection
