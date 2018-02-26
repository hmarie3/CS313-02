<?php
##############################################################################################################
#  Author: Heather Brune
#  Summary: This is the first page to visit the site. An account must be created and will be stored for log 
#           in later. Once signed up or logged you will be directed to the welcome page.
##############################################################################################################
include_once "database.php"; #for database connection only
include_once "functions.php"; #for match card creation
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