<!doctype html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/avatar.css') }}" rel="stylesheet">
	<!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<!---Fontawesome CDN Link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="icon" href="{{ asset('assets/img/image/favicon.ico') }}">
	<title>Forgot Password</title>
</head>
<body>
    {{-- <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
<div>
    @yield('content')
</div>
</body>
</html>
