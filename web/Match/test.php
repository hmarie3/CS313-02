<?php
   include_once "database.php";
   
   $db = connect_db();
   $sql = 'SELECT * FROM scores INNER JOIN match_users ON scores.userid = match_users.userid';
   $stmt = $db->prepare($sql);
   $stmt->execute();
   $categories = $stmt->fetchAll();
   print "Categories: ";
   print_r($categories);
   $stmt->closeCursor();
?>