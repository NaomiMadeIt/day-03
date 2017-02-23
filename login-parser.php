<?php session_start();
//hdie notices because they are ugly
error_reporting( E_ALL & ~E_NOTICE );
//begin parsing the form if the user submitted it
if( $_POST['did_login'] ){
  //TEMPORARY: the correct credentials for logging in. this will be replaced with database
  $correct_username = "ednasukz";
  $correct_password = "norlyednasux";

  //the values the user typed in:
  $username = $_POST['username'];
  $password = $_POST['password'];

  //check to see if they matched both the username and password
  if( $username === $correct_username AND $password === $correct_password ) {
    //remember the user for 1 week
    setcookie('loggedin', true, time() + 60 * 60 * 24 * 7);
    $_SESSION['logged_in'] = true;
    //send secret page
    header('location:secret_page.php');
  }else{
    //show an error
    $feedback= 'Your username and password combo is incorrect.';
  }
}//end if form parser

//is the user trying to log out?
//URL looks like ...login.php?action=logout
if( $_GET['action'] == 'logout' ){
  //from php.net session_destroy docs
  // Unset all of the session variables.
  $_SESSION = array();

  // If it's desired to kill the session, also delete the session cookie.
  // Note: This will destroy the session, and not just the session data!
  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]
  );
}
  //destroy the session
  session_destroy();
  setcookie('loggedin', '', time() - 99999);
  //expire the cookies
}//end of logout logic
