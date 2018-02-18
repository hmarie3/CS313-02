<?php
   include_once "database.php";
   include_once "functions.php";
   include_once "queries.php";

   if(isset($_POST['email'])) {
      $currentUser = addUser($_POST['username'], $_POST['email'], $_POST['password']);
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['email'] = $_POST['email'];
   }
   else {
      $currentUser = logIn($_POST['username'], $_POST['password']);
      if($currentUser['password'] == $_POST['password']) {
         $_SESSION['loggedIn'] = true;
         $_SESSION['username'] = $currentUser['username'];
         $_SESSION['email'] = $currentUser['email'];
         //print_r($currentUser['email']);
      }
      else {
         echo("<script>javascriptalert('Your username and password did not match. Please try again.')</script>");
         header('location: signUp.php');
      }
   }

?>

<!DOCTYPE html>
<html>
<head>
   <title>Match</title>
   <link rel="stylesheet" type="text/css" href="main.css" />
   <script src="main.js"></script>
</head>
<body>
   <div class="content">
      <h1>Welcome! <?php echo($_SESSION['username']); ?></h1>
      <h2>Thank you for playing with us.</h2>
      <h3>Your account has been created using email address <?php echo($_SESSION['email']) ?>.</h3>
      <form action="match.php" method="post"><input type="submit" name="play" value="Start Playing!"></form>
   </div>
</body>
</html>
