<!DOCTYPE html>
<html>
	<head>
		<title>Perpus Online With Laravel Framework</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('packages/uikit/css/uikit.almost-flat.min.css') }}"/>
		<script type="text/javascript" src="{{ asset('components/jquery/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('packages/uikit/js/uikit.min.js') }}"></script>
	</head>
	<body>
	<div class="uk-container uk-container-center uk-margin-top">
		<nav class="uk-navbar">
			<a href="#" class="uk-navbar-brand uk-hidden-small">LaraPus</a>
			<div class="uk-navbar-flip uk-navbar-content">
				<a href="#" class="">Login</a>
				<a href="#" class="">Daftar</a>
			</div>
			<div class="uk-navbar-brand uk-navbar-center uk-visible-small">LaraPus</div>
		</nav>
		<div class="uk-container-center uk-margin-top">
			@yield('content')
		</div>
	</div>
	</body>
</html>