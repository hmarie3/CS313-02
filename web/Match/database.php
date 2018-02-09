<?php

   function connect_db() {
      $dbUrl = getenv('DATABASE_URL');
      if (empty($dbUrl)) {
         //$dbUrl = "postgres://postgres:33433233@127.0.0.1:5432/match";
      

      /*$dbopts = parse_url($dbUrl);

      $dbHost = $dbopts["host"];
      $dbPort = $dbopts["port"];
      $dbUser = $dbopts["user"];
      $dbPassword = $dbopts["pass"];
      $dbName = ltrim($dbopts["path"],'/');*/

      try {
      $user = 'heather';
      $password = '33433233';
      return $db = new PDO("pgsql:host=127.0.0.1;port=5432;dbname=match", $user, $password);
   } catch (PDOException $ex) {
      echo 'Error!: ' . $ex.getMessage();
      die();        
     } 
  }
   }

?>