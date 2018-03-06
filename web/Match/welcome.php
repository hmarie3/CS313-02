<?php
##############################################################################################################
#  Author: Heather Brune
#  Summary: This is the welcome page. This page is set up in a php if statement. If it's a new user, 
#           they are greated with a welcome note and play button. Returning users see only the button.
##############################################################################################################
include_once "database.php"; #for database connection only
include_once "functions.php"; #for match card creation
include_once "queries.php"; #for database interaction only
?>

<!DOCTYPE html>
<html>
<head>
   <title>Match</title>
   <link rel="stylesheet" type="text/css" href="main.css" />
   <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
   <script src="main.js"></script>
</head>
<body>
   <div class="content">

<?php
   #if the email is set we know it was a new user, so add the user.
   if(isset($_POST['email'])) {
      #addUser() can be found in queries.php
      $currentUser = addUser($_POST['username'], $_POST['email'], $_POST['password']);
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['loggedIn'] = true;

?>
      
      <h1>Welcome! <?php echo($_SESSION['username']); ?></h1><br>
      <h2>Thank you for playing with us.</h2><br>
      <h3>Your account has been created using<br><?php echo($_SESSION['email']); ?></h3><br>

<?php
   }
   else {
      #logIn() can be found in queries.php
      $currentUser = logIn($_POST['username'], $_POST['password']);
      if($currentUser['password'] == $_POST['password']) {
         $_SESSION['loggedIn'] = true;
         $_SESSION['username'] = $currentUser['username'];
         $_SESSION['email'] = $currentUser['email'];
         //print_r($currentUser['email']);
      }
   }
?>

      <form action="match.php" method="post"><input type="submit" name="play" class="submit" value="Start Playing!"></form>
   </div>
</body>
</html>