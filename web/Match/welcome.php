<?php
   include_once "database.php";
   include_once "functions.php";
   include_once "queries.php";

   if(isset($_POST['email'])) {
      $_SESSION['user']['userid'] = addUser($_POST['username'], $_POST['email'], $_POST['password']);
   }
   else {
      $_SESSION['user']['userid'] = logIn($_POST['username'], $_POST['password']);
   }
   echo(sizeof($_SESSION['user']));
   if(sizeof($_SESSION['user']) > 0) {
      if(isset($_POST['email'])) {
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
      <h1>Welcome! <?php echo($_POST['username']); ?></h1>
      <h2>Thank you for playing with us.</h2>
      <h3>Your account has been created using email address <?php echo($_POST['email']) ?>.</h3>
      <form action="match.php" method="post"><input type="submit" name="play" value="Start Playing!"></form>
   </div>
</body>
</html>


<?php
      }
      else {
         header('location: match.php');
      }
   }
   else {
      alert('Incorrect username or password. Please try again.');
      header('location: signUp.php');
   }
?>
