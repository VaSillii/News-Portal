@extends('main')


@section('head')
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="/../css/reg-style.css">
@endsection()


@section('reg')
	<div id="container">
		<h1>Check in</h1>
		<a href="/" class="close-btn">
			<img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
		</a>

	  <form>
	  	<input type="text" name="login" placeholder="Login">
	    <input type="email" name="email" placeholder="E-mail">
	    <input type="password" name="password" placeholder="Password">
	    <!-- <input type="submit" name="submit" placeholder="submit"> -->
		<input type="submit" name="sub" value="Chech in" class="btn-green">
	    <!-- <a href="#">Chech in</a> -->
		</form>
	</div>
@endsection()

@section('script')
	<script src="/js/auth-form.js"></script>
@endsection