<?php
   include_once "database.php";
   include_once "functions.php";
   include_once "queries.php";
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
      <h1>Welcome! <?php echo($_SESSION['username']); ?></h1><br>
      <h2>Thank you for playing with us.</h2><br>

<?php
   if(isset($_POST['email'])) {
      $currentUser = addUser($_POST['username'], $_POST['email'], $_POST['password']);
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['email'] = $_POST['email'];
?>
      <h1>Welcome! <?php echo($_SESSION['username']); ?></h1><br>
      <h2>Thank you for playing with us.</h2><br>
      <h3>Your account has been created using<br><?php echo($_SESSION['email']); ?></h3><br>
<?php
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

      <form action="match.php" method="post"><input type="submit" name="play" class="submit" value="Start Playing!"></form>
   </div>
</body>
</html>
