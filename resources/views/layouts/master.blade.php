<html lang ="en">
<head>
	<title>Build Your Day</title>
	@include('partials.header-scripts')
	</head>
<body>
    @include('partials.header')
	<div class="container content">
	@yield('content')
	</div>
	@include('partials.footer-scripts')   
</body>
</html>