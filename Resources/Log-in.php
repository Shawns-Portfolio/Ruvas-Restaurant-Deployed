<?php
include("Connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="generator" content="">
        <title>Log-in</title>
        <link href="MainCSS.css" rel="stylesheet">
        <style>
            .bd-placeholder-img {
              font-size: 1.125rem;
              text-anchor: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }
      
            @media (min-width: 768px) {
              .bd-placeholder-img-lg {
                font-size: 3.5rem;
              }
            }
          </style>
        <link href="Log-in CSS.css" rel="stylesheet">

    </head>

    <body>
      <div class= "text-center">
      <form class="form-signin">
      <img class="mb-4" src="Log-in Icon.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal"><b>Sign In</b></h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <a class="sign-up" href="Sign-Up.html">Sign Up</a>
      <p class="copy-right">&copy; 2023-2030</p>
    </form>
  </div>
    </body>
</html>
