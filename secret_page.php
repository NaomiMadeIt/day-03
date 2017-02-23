<?php
  //begin or resume the session
  session_start();

  //if the cookie is still valid, re-create the session
  if( $_COOKIE['loggedin'] ){
    $_SESSION['logged_in'] = true;
  }

  //security! if the user is logged in
  if( ! $_SESSION['logged_in'] ){
    //send them back to the login page
    header('location:login.php');
  }
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>THE SECRET PAGE OF SECRETS</title>
  </head>
  <body>
    <h1>You have unlocked the secret of all secrets! Go you!</h1>

    <img src="http://i1.kym-cdn.com/photos/images/original/001/150/921/afd.gif" />
    <a href="login.php?action=logout">Log Out</a>
  </body>
</html>
