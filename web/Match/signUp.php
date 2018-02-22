<?php
   include_once "database.php";
   include_once "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
   <title>Welcome to Match</title>
   <link rel="stylesheet" type="text/css" href="main.css" />
   <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
   <script src="main.js"></script>
</head>
<body>
   <div class="content">
      <h1>Want to play the match game?</h1><br>
      <h2>Sign up below!</h2>
      <form id="signUp" action="welcome.php" method="post">
         <label>Email: </label><input type="text" name="email" placeholder="jsmith@byui.edu..."><br>
         <label>Username: </label><input type="text" name="username" placeholder="jsmith31..."><br>
         <label>Password: </label><input type="password" name="password" placeholder="must be 8 characters..."><br>
         <input type="submit" class="submit" name="submit" value="Sign Me Up!">
      </form>
      <h2>Returning Users</h2><br>
      <h2>Sign In</h2>
      <form id="signIn" action="welcome.php" method="post">
         <label>Username: </label><input type="text" name="username" placeholder="click to type..."><br>
         <label>Password: </label><input type="password" name="password"><br>
         <input type="submit" class="submit" name="submit" value="Sign In">
      </form>
   </div>
</body>
</html>