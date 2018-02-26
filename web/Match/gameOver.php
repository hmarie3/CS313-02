<!--

<?php
###############################################################################################################
#  Author: Heather Brune
#  Summary: This is the page to tell you the game is over, your score, and the highest scores.
###############################################################################################################
#  include_once "database.php"; #for database connection only
#  include_once "functions.php"; #for match card creation
#  include_once "queries.php"; #for database interaction only
    
#    if($_SESSION['loggedIn'] == true){
#       addScore($_POST['finalScore'], $_POST['userid']);

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
      <h3>Your score was <?php #echo($_POST['finalScore']); ?></h3>
      <h3>High Score Board</h3>

      <?php
#         $db = getCategories(); 
#         foreach ($db as $key=>$row) {
#            echo('<tr><td>' . $row["scoreid"] . '</td>');
#            echo('<td>' . $row["username"] . '</td>');
#            echo('<td>' . $row["highscore"] . '</td></tr>');
         }

         //$db = null;
      ?>

      </body>
      </html>

      <?php
         
           // addScore($_POST['finalScore'], $_POST['userid']);


#         } else {
#            header('location: signUp.php');
         }
      ?>

-->