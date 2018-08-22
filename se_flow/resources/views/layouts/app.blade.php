<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>This is app</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	
</head>
<body>
	@include('inc.navbar')

	<div class="container" style="margin-top: 50px">
		@if(Request::is('/'))
			@include('inc.showcase')
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">
				@include('inc.alerts')
				@if(session('success'))
	<div class="alert alert-success">
	{{session('success')}}
	</div>
@endif
				@yield('content')
			</div>
			<div class="col-md-4 col-lg-4">
				@include('inc.sidebar')
			</div>
		</div>
	</div>	
	<footer id="footer" class="text-center">
		<p>Copyright 2018 &copy; SEDevelopments</p>
	</footer>
</body>
</html>