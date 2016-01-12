<div class="full reveal" id="login" data-reveal data-animation-in="fade-in" data-animation-out="fade-out"> 

<button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>

  <div class="row">

<h1 class="text-center">Login</h1>

@if (count($errors) > 0)

<div class="callout alert">

<strong>Whoops!</strong> There were some problems with your input.<br><br>

<ul>

@foreach ($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">

<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">

<label class="col-md-4 control-label">E-Mail Address</label>

<div class="col-md-6">

<input type="email" class="form-control" name="email" value="{{ old('email') }}">

</div>

</div>

<div class="form-group">

<label class="col-md-4 control-label">Password</label>

<div class="col-md-6">

<input type="password" class="form-control" name="password">

</div>

</div>

<div class="form-group">

<div class="col-md-6 col-md-offset-4">

<div class="checkbox">

<label>

<input type="checkbox" name="remember"> Remember Me

</label>

</div>

</div>

</div>

<div class="form-group">

<div class="col-md-6 col-md-offset-4">

<button type="submit" class="button large">Login</button>

<a class="button large" href="{{ url('/password/email') }}">Forgot Your Password?</a>

</div>

</div>

</form>

</div>

</div>

</div>

</div>

</div>

</div>

<div class="full reveal" id="signup" data-reveal data-animation-in="fade-in" data-animation-out="fade-out"> 

<button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
<div class="row">

<div class="small-12 columns">

<h1 class="text-center">Register</h1>

<div class="panel">

@if (count($errors) > 0)

<div class="callout alert">

<strong>Whoops!</strong> There were some problems with your input.<br><br>

<ul>

@foreach ($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">

<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">

<label class="col-md-4 control-label">Name</label>

<div class="col-md-6">

<input type="text" class="form-control" name="name" value="{{ old('name') }}">

</div>

</div>

<div class="form-group">

<label class="col-md-4 control-label">E-Mail Address</label>

<div class="col-md-6">

<input type="email" class="form-control" name="email" value="{{ old('email') }}">

</div>

</div>

<div class="form-group">

<label class="col-md-4 control-label">Password</label>

<div class="col-md-6">

<input type="password" class="form-control" name="password">

</div>

</div>

<div class="form-group">

<label class="col-md-4 control-label">Confirm Password</label>

<div class="col-md-6">

<input type="password" class="form-control" name="password_confirmation">

</div>

</div>

<div class="form-group">

<div class="col-md-6 col-md-offset-4">

<button type="submit" class="button large">

Register

</button>

</div>

</div>

</form>

</div>

</div>

</div>

</div>

</div> 

  </div>