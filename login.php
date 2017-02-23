<?php require('login-parser.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login to your account</title>
  </head>
  <body>
    <!-- <?php
    //Lets just look at the post array
    print_r($_POST) ?> -->
    <h1>Log In to Your Super Secret, Secret Account</h1>
    <?php echo $feedback; ?>
    <form method="post" action="login.php">
      <label type="text" name="username">Username</label>
      <input type="text" name="username" id="the_username" />

      <label for="the_password">Password</label>
      <input type="password" name="password" id="the_password" />

      <input type="submit" value="Log In" />
      <input type="hidden" name="did_login" value="true" />
    </form>

  </body>
</html>
