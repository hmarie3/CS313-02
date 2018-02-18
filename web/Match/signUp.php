<?php
   include_once "database.php";
   include_once "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
   <title>Welcome to Match</title>
   <link rel="stylesheet" type="text/css" href="main.css" />
   <script src="main.js"></script>
</head>
<body>
   <div class="content">
      <h1>Want to play the match game?</h1>
      <h2>Sign up below!</h2>
      <form id="signUp" action="welcome.php" method="post">
         <label>Email: </label><input type="text" name="email"><br>
         <label>Username: </label><input type="text" name="username"><br>
         <label>Password: </label><input type="password" name="password"><br>
         <input type="submit" name="submit" value="Sign Me Up!">
      </form>
      <h2>Returning Users<br>Sign In</h2>
      <form id="signIn" action="welcome.php" method="post">
         <label>Username: </label><input type="text" name="username"><br>
         <label>Password: </label><input type="password" name="password"><br>
         <input type="submit" name="submit" value="Sign In">
      </form>
   </div>
</body>
</html>