@extends('layouts.homepage')

@section('content')	

<div class="icons">
	<div class="row no-spacing-top">
		<div class="small-12 medium-4 large-3 large-offset-1 columns icon-build">
			
  
			 	<?php echo file_get_contents("images/icons/build.svg"); ?>
			 	<h3 class="text-center">Build Your Event</h3>
			 	<p class="text-center">Create your event wether it be a wedding or stag do. Its only takes 2 mins!</p>

		
		</div>
		<div class="small-12 medium-4 large-3 large-offset-1 columns icon-invite">
  
			 	<?php echo file_get_contents("images/icons/invite.svg"); ?>
			 	<h3 class="text-center">Invite</h3>
			 	<p class="text-center">Add your contacts and send your invitations out with one click!</p>
			</div>
		<div class="small-12 medium-4 large-3 large-offset-1 columns icon-connect">
  
			 	<?php echo file_get_contents("images/icons/connect.svg"); ?>    
			 	<h3 class="text-center">Connect</h3>         
			 	<p class="text-center">Let your invitees confirm attendance and keep them up to date</p>
		</div>

		</div>
</div>



<div class="pricing">
	<div class="row">
		
		<div class="small-12 medium-5 columns"> 
			<div class="price-wrapper"> 
				<div class="price">£14.99</div>
				<p class="text-center lead">Per Event</p>
			</div>
		</div>
		<div class="small-12 medium-7 columns"> 
			<h2 class="text-center">Pricing</h2>
		<p class="text-center">Our simple pricing structure allows for you to create events when you need to without have any recuring costs. Simply create an account
			for free and starting creating your event now.</p>
						<div class="valign-wrapper">
			<div class="valign">
<a data-open="signup" class="button large">Create Your Event</a>

</div>

</div>
			

</div>
		</div>
</div>
<div class="aboutus">
	<div class="row">
		<div class="large-12 columns">
		<h2 class="text-center">Latest From The Blog</h2>
		</div>


	<div class="small-12 large-4 columns">
		<div class="hovereffect">
        <img class="img-responsive" src="http://placeimg.com/640/480/people" alt="">
            <div class="overlay">
                <h2>Why Plan An Event?</h2>
				<p> 
					<a href="#">View Blog</a> 
				</p> 
            </div>
    </div>
	</div>
	<div class="small-12 large-4 columns">
		<div class="hovereffect">
        <img class="img-responsive" src="http://placeimg.com/640/480/tech" alt="">
            <div class="overlay">
                <h2>Popular Events Of 2016</h2>
				<p> 
					<a href="#">View Blog</a> 
				</p> 
            </div>
    </div>
	</div>
	<div class="small-12 large-4 columns">
		<div class="hovereffect">
        <img class="img-responsive" src="http://placeimg.com/640/480/arch" alt="">
            <div class="overlay">
                <h2>The Best invitations</h2>
				<p> 
					<a href="#">View Blog</a> 
				</p> 
            </div>
    </div>
	</div>
	
	</div>
	<hr />
</div>



@include('partials.auth-forms')



@include('partials.footer')

@endsection



