<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<link rel="stylesheet" href="/css/grid.css">
	
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>

	@section('head')
	@show()
</head>
<body>
	<div class="wrapper">
		@section('header')
		@show()

		<div class="content container">
			@section('content')
			@show()

			@section('sidebar')
			@show()	
		</div>
		
		

		@section('footer')
		@show()
	</div>
	
	@section('script')
		

	@show()
</body>
</html>