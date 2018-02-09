<?php
   include_once "database.php";
   include_once "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
   <title>Sign Up</title>
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
   </div>
</body>
</html>