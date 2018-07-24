<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Registr</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<style>
  html,body {
    height: 100%;
  }

  body {
    display: flex;
    text-align: center;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background: url('../img/background.jpg') no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    overflow: hidden;
    color: #fff;
  }

  input {
    background: rgba(3,3,3,0.1);
    padding: 8px;
    width: 100%;
    margin-bottom: 10px;
    border-radius: 6px;
    border: none;
    color: #fff;
    background: rgba(3,3,3,0.5);
    transition: all 0.2s ease-in-out;
  }
  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }

  .form-signin .checkbox {
    font-weight: 400;
  }

  .checkbox-container {
    display: flex;
    /*display: grid;
    grid-template-columns: 35% 65%;*/
  }
  input[type="checkbox"] {
    width: 10%; 
    /*margin: 0; */
  }
  .form-signin .form-control:focus {
    z-index: 2;
  }    
</style>
</head>

  <body class="text-center">
    <form class="form-signin" method="post">
      @csrf
      <h3>Please sign in</h3>
      <input type="text" id="inputName" name="name" placeholder="Name" required autofocus>
      <input type="email" id="inputEmail" name="email" placeholder="Email address" required autofocus>
      <input type="password" id="inputPassword" name="password" placeholder="Password" required>
      <input type="password" id="inputPassword" name="password_confirmation" placeholder="Password confirmation" required>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember" value="1"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
  </body>
</html>
