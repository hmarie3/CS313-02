<?php

function getCategories() {
   $db = connect_db();
   $sql = 'SELECT * FROM scores INNER JOIN match_users ON scores.userid = match_users.userid';
   $stmt = $db->prepare($sql);
   $stmt->execute();
   $categories = $stmt->fetchAll();
   $stmt->closeCursor();
   return $categories;
}

function addUser($username, $email, $password) {
   $db = connect_db();
   $sql = 'INSERT INTO match_users(username, email, password) VALUES(:username, :email, :password)';
   $stmt = $db->prepare($sql);
   $stmt->bindValue(':username', $username);
   $stmt->bindValue(':email', $email);
   $stmt->bindValue(':password', $password);
   $stmt->execute();
   $categories = $stmt->fetchAll();
   $stmt->closeCursor();
   return $categories;
}

function logIn($username, $password) {
   $db = connect_db();
   $sql = 'SELECT * FROM match_users WHERE username = :username AND password = :password';
   $stmt = $db->prepare($sql);
   $stmt->bindValue(':username', $username);
   $stmt->bindValue(':password', $password);
   $stmt->execute();
   $categories = $stmt->fetch(PDO::FETCH_ASSOC);
      //print_r($categories);
   $stmt->closeCursor();
   return $categories;
}

//finish addSore
function addScore($finalScore, $userid) {
   $db = connect_db();
   $sql = 'INSERT INTO scores(highscore) VALUES(:highscore) WHERE userid = :userid AND highscore < :highscore';
   $stmt = $db->prepare($sql);
   $stmt->bindValue(':userid', $userid);
   $stmt->bindValue(':highscore', $finalScore);
   $stmt->execute();
   $categories = $stmt->fetch(PDO::FETCH_ASSOC);
   $stmt->closeCursor();
   return $categories;  
}

?>