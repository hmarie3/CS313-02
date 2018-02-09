<?php

   function connect_db() {
      try {
      $user = 'heather';
      $password = '33433233';
      return $db = new PDO("pgsql:host=127.0.0.1;port=5432;dbname=match", $user, $password);
   } catch (PDOException $ex) {
      echo 'Error!: ' . $ex.getMessage();
      die();        
     } 
   }

?>