<!DOCTYPE html>
<html>
	<head>
		<title> @yield('titulo') </title>
        <link rel="shortcut icon" type="image/svg" href="{{ asset('img/batoiLogicResources/favicon.svg') }}">
		<link rel="stylesheet" type="text/css" href="/css/app.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/scss/general-style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/scss/header-style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/scss/indexProd-style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/scss/loginForm-style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/scss/showProd-style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/scss/footer-style.css') }}">
	</head>
	<body>
		@include('partials.nav')
        <div id="fullGeneralContent">
		    @yield('contenido')
        </div>
        @include('partials.footer')
        <script src={{ asset('js/responsiveHeader.js')  }}></script>
    </body>
    <script type="text/javascript" src="/js/app.js"></script>
</html>
