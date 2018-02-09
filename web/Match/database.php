<?php

   function connect_db() {
      $dbUrl = getenv('DATABASE_URL');
      if (empty($dbUrl)) {
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
         /*$dbopts = parse_url($dbUrl);
         print_r($dbopts);
         $dbHost = $dbopts["host"];
         $dbPort = $dbopts["port"];
         $dbUser = $dbopts["user"];
         $dbPassword = $dbopts["pass"];
         $dbName = ltrim($dbopts["path"],'/');*/

         try {
          $db = new PDO("postgres:host=ec2-174-129-22-84.compute-1.amazonaws.com;port=5432;dbname=d3l3oftili3v9q", "vbylfivxsqxagr", "58b951ffe2071531901b78e683429ad0b585cc0b05e9590592a7e12f66406503");
         }
         catch (PDOException $ex) {
          print "<p>error: $ex->getMessage() </p>\n\n";
          die();
         }
      }
   }

?>