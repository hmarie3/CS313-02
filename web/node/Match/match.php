<?php
##############################################################################################################
#  Author: Heather Brune
#  Summary: This is the main game page. PHP loops to create the cards. The high score table is commented out
#           because I was unable to get it working.
##############################################################################################################
include_once "database.php"; #for database connection only
include_once "functions.php"; #for match card creation
include_once "queries.php"; #for database interaction only

   if($_SESSION['loggedIn'] == true){
?>

<!DOCTYPE html>
<html>
<head>
   <title>Match</title>
   <link rel="stylesheet" type="text/css" href="main.css" />
   <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="main.js"></script>
</head>
<body>
   <h1>Match</h1>
   <p id="instructions">Try to find a match in as few clicks as possible!</p>
   <div id="displayCase">
   <?php 
      $_SESSION['cardNum'] = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0];
      for ($x = 0; $x < 12; $x++) {
   ?>      
         <div class="card" id="<?php makeCardID(); ?>" onclick= "flipCard(this);"></div>
   <?php      
      }
   ?>
   </div>

   <table id="thisGameScore">
   <tr>
      <th>User Name</th>
      <th>Score</th>
   </tr>
   <tr>
      <td><?php echo($_SESSION["username"]); ?></td>
      <td id="score">0</td>
   </tr>

<!--
   <table id="highScoreTable">
      <tr>
         <th>Place</th>
         <th>User Name</th>
         <th>High Score</th>
      </tr>

<?php
#   $db = getCategories(); 
#   foreach ($db as $key=>$row) {
#      echo('<tr><td>' . $row["scoreid"] . '</td>');
#      echo('<td>' . $row["username"] . '</td>');
#      echo('<td>' . $row["highscore"] . '</td></tr>');
   }

?>

   </table>
-->

</body>
</html>

<?php
      //if(isset($_POST['finalScore'])) {
      //addScore($_POST['finalScore'], $_POST['userid']);
      //}

   } else {
      header('location: signUp.php');
   }
?>