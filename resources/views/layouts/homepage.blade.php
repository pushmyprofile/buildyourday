<html lang ="en">
<head>
	<title>Build Your Day</title>
	@include('partials.header-scripts')
	</head>
<body>
    @include('partials.home-header')
	<div class="container margin-top">
	@yield('content')
	</div>

</body>
</html>