<?php

function getCategories() {
   $db = connect_db();
   $sql = 'SELECT * FROM scores, match_users INNER JOIN match_users ON scores.userid = match_users.userid';
   $stmt = $db->prepare($sql);
   $stmt->execute();
   $categories = $stmt->fetchAll();
   $stmt->closeCursor();
   return $categories;
}

?>