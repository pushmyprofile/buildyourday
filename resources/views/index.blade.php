@extends('layouts.homepage')

@section('content')	

<div class="icons">
	<div class="row">
		<div class="small-12 medium-4 large-3 large-offset-1 columns icon-build">
			
  
			 	<?php echo file_get_contents("images/icons/build.svg"); ?>
			 	<h3 class="text-center">Build Your Event</h3>

		
		</div>
		<div class="small-12 medium-4 large-3 large-offset-1 columns icon-invite">
  
			 	<?php echo file_get_contents("images/icons/invite.svg"); ?>
			 	<h3 class="text-center">Invite</h3>

			</div>
		<div class="small-12 medium-4 large-3 large-offset-1 columns icon-connect">
  
			 	<?php echo file_get_contents("images/icons/connect.svg"); ?>    
			 	<h3 class="text-center">Connect</h3>         

		</div>

		</div>
</div>


<div class="pricing">
	<div class="row">
		<div class="small-12">  
			 	

		
		</div>
		</div>
</div>
@include('partials.auth-forms')





@endsection

