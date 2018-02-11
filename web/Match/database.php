<?php

   function connect_db() {
      $dbUrl = getenv('DATABASE_URL');
      if (!isset($dbUrl) || empty($dbUrl)) {
         try {
            $user = 'heather';
            $password = '33433233';
            return $db = new PDO("pgsql:host=127.0.0.1;port=5432;dbname=match", $user, $password);
         } 
         catch (PDOException $ex) {
            echo 'Error!: ' . $ex.getMessage();
            die();        
         } 
      }  
      else {
         $dbopts = parse_url($dbUrl);
         $dbHost = $dbopts["host"];
         $dbPort = $dbopts["port"];
         $dbUser = $dbopts["user"];
         $dbPassword = $dbopts["pass"];
         $dbName = ltrim($dbopts["path"],'/');

         try {
          $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
          $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
         }
         catch (PDOException $ex) {
          print "<p>error: $ex->getMessage() </p>\n\n";
          die();
         }
      }
   }

?>