<!DOCTYPE html>
<html>
	<head>
		<title> @yield('titulo') </title>
		<link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/scss/header-style.css">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/scss/header-style.css') }}" rel="stylesheet">
	</head>
	<body>
		@include('partials.nav')
		@yield('contenido')
	</body>
    <script type="text/javascript" src="/js/app.js"></script>
</html>
