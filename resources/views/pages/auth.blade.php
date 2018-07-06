<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="/../css/auth-style.css">
</head>
<body>
	<div id="login-button">
  		<img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png"></img>
	</div>
	<div id="container">
		<h1>Log In</h1>
		<a href="/" class="close-btn">
			<img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
		</a>

	  <form>
	    <input type="email" name="email" placeholder="E-mail">
	    <input type="password" name="pass" placeholder="Password">
	    <input type="submit" name="sub" value="Log in" class="btn-green">

	    <!-- <a href="#">Log in</a> -->
	    <div id="remember-container">
	    	<input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
	    	<span id="remember">Remember me</span>
	    	<span id="forgotten">Forgotten password</span>
	    </div>
		</form>
	</div>

<!-- Forgotten Password Container -->
	<div id="forgotten-container">
	<h1>Forgotten</h1>
	<a href="" class="close-btn color-btn">
		<img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
	</a> 
		
	</span>

	<form>
		<input type="email" name="email" placeholder="E-mail">
		<input type="submit" name="sub" value="Log in" class="orange-btn btn-green color-btn">

	    <!-- <a href="#" class="orange-btn">Get new password</a> -->
	</form>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="/js/auth-form.js"></script>

</body>
</html>
