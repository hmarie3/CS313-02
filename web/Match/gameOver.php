<?php
   include_once "database.php";
   include_once "functions.php";
   include_once "queries.php";
   if($_SESSION['loggedIn'] == true){
?>

<!DOCTYPE html>
<html>
<head>
   <title>Game Over</title>
   <link rel="stylesheet" type="text/css" href="main.css" />
   <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="main.js"></script>
</head>
<body>
<h3>Thank you for playing.</h3>
<h3>Your score was <?php echo($_POST['finalScore']); ?></h3>
<h3>High Score Board</h3>

<?php
   $db = getCategories(); 
   foreach ($db as $key=>$row) {
      echo('<tr><td>' . $row["scoreid"] . '</td>');
      echo('<td>' . $row["username"] . '</td>');
      echo('<td>' . $row["highscore"] . '</td></tr>');
   }

   //$db = null;
?>

</body>
</html>

<?php

   } else {
      header('location: signUp.php');
   }
?>