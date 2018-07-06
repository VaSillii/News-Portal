<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$title or 'News Portal'}}</title>

	<meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>

	@section('head')
	@show
</head>
<body>
	<div class="wrapper">
		@section('header')
		@show
	<div class="content container upper-layer">
		@section('content')
		@show()

		@section('sidebar')
		@show()
	</div>
		@section('auth')
		@show()

		@section('reg')
		@show()

		@section('footer')
		@show()

	</div>
	
	@section('script')

	@section('script')
	@show()
</body>
</html>