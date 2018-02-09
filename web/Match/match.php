<?php
   include_once "database.php";
   include_once "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
   <title>Match</title>
   <link rel="stylesheet" type="text/css" href="main.css" />
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
         <div class="card" id="<?php makeCardID(); ?>"></div>
   <?php      
      }
   ?>
   </div><!-- end displayCase --> 

   <table id="highScoreTable">
      <tr>
         <th>Place</th>
         <th>User Name</th>
         <th>High Score</th>
      </tr>

<?php
   $db = connect_db(); 
   $statement = $db->query('SELECT * FROM scores INNER JOIN match_users ON scores.userid = match_users.userid;');
   while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      echo('<tr><td>' . $row["scoreid"] . '</td>');
      echo('<td>' . $row["username"] . '</td>');
      echo('<td>' . $row["highscore"] . '</td></tr>');
   }
   $db = null;
?>

   </table> 
</body>
</html>