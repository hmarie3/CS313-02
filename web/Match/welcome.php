<?php
   include_once "database.php";
   include_once "functions.php";
   $email = $_POST['email'];
   $username = $_POST['username'];
   $password = $_POST['password'];
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
      <h1>Welcome! <?php echo($username); ?></h1>
      <h2>Thank you for playing with us.</h2>
      <h3>Your account has been created using email address <?php echo($email) ?>.</h3>
      <form action="match.php" method="post"><input type="submit" name="play" value="Start Playing!"></form>
   </div>
</body>
</html>