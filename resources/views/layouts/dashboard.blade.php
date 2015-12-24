<html lang ="en">
<head>
	<title>Build Your Day</title>
	@include('partials.header-scripts')
	</head>
<body class="dashboard">
    @include('partials.dashboard-header')
	<div class="container content">
	@yield('content')
	</div>
</body>
</html>