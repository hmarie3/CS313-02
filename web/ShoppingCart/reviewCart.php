<?php
include_once("variables.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Review Cart</title>
  <link rel="stylesheet" href="shoppingCart.css">
  <link href="https://fonts.googleapis.com/css?family=Eczar" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
  <script type="text/javascript" src="shoppingCart.js"></script>
</head>
<body>
<h1 class="title">Wee Ones Toys</h1>
<h3 class="title">for your little girls and boys!</h3>
  <form id="reviewIt" class="title">
    <table id="review">
      <tr>
        <th>Item Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th></th>
      </tr>
      <?php
      $total = 0;
      foreach ($_SESSION['cart'] as $item) {
        $total += ($item['quantity'] * $_SESSION['itemsForSale'][$item['id'] - 1]['price']);
      ?>
      <tr>
        <td><?php echo($_SESSION['itemsForSale'][$item['id'] - 1]['name']) ?></td>
        <td><input id="howMany_<?php echo($item['id']); ?>" type="number" value="<?php echo($item['quantity']) ?>" /><input type="hidden" id="hidden_<?php echo($item['id']); ?>" name="" value="<?php echo($_SESSION['itemsForSale'][$item['id'] - 1]['price']); ?>"></td>
        <td id="price_<?php echo($item['id']); ?>"><?php echo('$' + ($item['quantity'] * $_SESSION['itemsForSale'][$item['id'] - 1]['price'])) ?></td><td>
        <button onclick="updateTotal(<?php echo($item['id']); ?>);">Update</button> </td>
      </tr>
      <?php 
      }
      ?>
      <tr>
        <td></td>
        <td></td>
        <td>Total: </td>
        <td id="total"><?php echo($total); ?></td>
      </tr>
    </table>
    </form>
    <form action="shopping.php">
    <input type="submit" value="Keep Shopping"></form>
    <form action="checkout.php" method="post">
    <input type="submit" value="Checkout">
  </form>
</body>
</html>