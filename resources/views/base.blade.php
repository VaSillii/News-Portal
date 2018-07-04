<!DOCTYPE html>
<html>
<head>
	<title>{{$title or 'News Portal'}}</title>
	@section('head')
	@show
</head>
<body>
	<header>
		@section('header')
		@show
	</header>

	<div class="mainContent">
		@section('content')
		@show
	</div>

	<footer>
		@section('footer')
		@show
	</footer>
	<script type="text/javascript" src="base_script.js"></script>
</body>
</html>

