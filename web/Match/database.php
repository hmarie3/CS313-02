<?php
##############################################################################################################
#  Author: Heather Brune
#  Summary: This page contains the function to call the database and connect to localhost and Heroku.
##############################################################################################################

   function connect_db() {
      $dbUrl = getenv('DATABASE_URL');
      if (empty($dbUrl)) {
         try {
            $user = 'heather';
            $password = '33433233';
            $db = new PDO("pgsql:host=127.0.0.1;port=5432;dbname=match", $user, $password);
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
         }
         catch (PDOException $ex) {
          print "<p>error: $ex->getMessage() </p>\n\n";
          die();
         }
      }
      return $db;
   }

?>