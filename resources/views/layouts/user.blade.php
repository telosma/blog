<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{ url('lib/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('lib/materialize/css/materialize.min.css') }}">
	<link rel="stylesheet" href="{{ url('lib/font-awesome/css/font-awesome.min.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ url('lib/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ url('css/style.css') }}">

	

</head>
<body>

	@include('includes.header')
	@yield('content')
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="{{ url('lib/bootstrap/js/bootstrap.min.js') }}" type="text/javascript" charset="utf-8" async defer></script>
	<script src="{{ url('lib/materialize/js/materialize.min.js') }}" type="text/javascript" charset="utf-8" async defer></script>
	<script src="{{ url('js/app.js') }}" type="text/javascript" charset="utf-8"></script>
</body>
</html>