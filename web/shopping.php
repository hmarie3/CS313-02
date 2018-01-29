<?php
include_once("variables.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Shopping</title>
  <link rel="stylesheet" href="shoppingCart.css">
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="shoppingCart.js"></script>
</head>
<body>
  <form id="buyIt" action="reviewCart.php" method="post">
    <div id="displayCase">
    <?php
    foreach ($_SESSION['itemsForSale'] as $item) {
    ?>
    <div class="item" id="<?php echo($item['id']) ?>">
      <img src="<?php echo($item['imageURL']) ?>" />
      <select name="Quantity" id="num_<?php echo($item['id']) ?>">
        <option selected>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
      </select>
      <button type="button" onclick="addToCart(<?php echo($item['id']) ?>)">Add to Cart</button>  
    </div>
    <?php
    }
    ?>
    <input type="submit" value="View Cart">
    </div><!-- end displayCase --> 
  </form>
  <div id="cart" style="display: none">
  </div>
</body>
</html>