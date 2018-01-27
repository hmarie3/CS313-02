<?php
include_once("variables.php");

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$street = htmlspecialchars($_POST['street']);
$city = htmlspecialchars($_POST['city']);
$state = htmlspecialchars($_POST['state']);
$zip = htmlspecialchars($_POST['zip']);



?>
<!DOCTYPE html>
<html>
<head>
  <title>Confirmation</title>
  <link rel="stylesheet" href="shoppingCart.css">
  <link href="https://fonts.googleapis.com/css?family=Eczar" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
  <script type="text/javascript" src="shoppingCart.js"></script>
</head>
<body>

<h1 class="title">Wee Ones Toys</h1>
<h3 class="title">for your little girls and boys!</h3>
<div class="title" id="same">
  <h2>Order Confirmed</h2>
  <?php
    echo("$name <br>");
    echo("$email <br>");
    echo("$street <br>");
    echo("$city,  ");
    echo("$state ");
    echo("$zip <br><br>");
    echo("<h2>Today you purchased:</h2> <br>");


      foreach ($_SESSION['cart'] as $item) {
        echo($_SESSION['itemsForSale'][$item['id'] - 1]['name']);
        echo(", ");
        echo($item['quantity']);
        echo("<br>");
      }
  ?>
</div>


</body>
</html>