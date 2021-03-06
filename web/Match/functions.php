<?php
##############################################################################################################
#  Author: Heather Brune
#  Summary: This page holds the function that creates the card ID's.
##############################################################################################################

   if (session_status() == PHP_SESSION_NONE) {
      session_start();
   } 

   function makeCardID() {
      
      $numRand = mt_rand(1,6);
      
      if ($_SESSION['cardNum'][$numRand] < 2) {
         $_SESSION['cardNum'][$numRand]++;
         echo $numRand;
      }
      else {
         makeCardID();
      }
      unset($numRand);
   }
   
?>