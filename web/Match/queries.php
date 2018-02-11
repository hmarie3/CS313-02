<?php

function getCategories() {
   $db = connect_db();
   $statement = $db->prepare("SELECT * FROM scores INNER JOIN match_users ON scores.userid = match_users.userid");
   $statement->execute();
   /*
   $sql = 'SELECT * FROM scores INNER JOIN match_users ON scores.userid = match_users.userid';
   $stmt = $db->prepare($sql);
   $stmt->execute();
   $categories = $stmt->fetchAll();
   $stmt->closeCursor();
   return $categories;*/
}

?>