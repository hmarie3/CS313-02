<?php

   function connect_db() {
      // default Heroku Postgres configuration URL
      $dbUrl = getenv('DATABASE_URL');

      if (empty($dbUrl)) {
 // example localhost configuration URL with postgres username and a database called cs313db
         $dbUrl = "postgres://postgres:password@localhost:5432/cs313db";
      }

      $dbopts = parse_url($dbUrl);


      $dbHost = $dbopts["host"];
      $dbPort = $dbopts["port"];
      $dbUser = $dbopts["user"];
      $dbPassword = $dbopts["pass"];
      $dbName = ltrim($dbopts["path"],'/');
      
      try {
      $user = 'heather';
      $password = '33433233';
      return $db = new PDO("pgsql:host=127.0.0.1;port=5432;dbname=match", $dbUser, $dbPassword);
   } catch (PDOException $ex) {
      echo 'Error!: ' . $ex.getMessage();
      die();        
     } 
   }

?>