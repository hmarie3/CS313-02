<?php
include_once("variables.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Shopping</title>
  <link rel="stylesheet" href="shoppingCart.css">
  <link href="https://fonts.googleapis.com/css?family=Eczar" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
  <script type="text/javascript" src="shoppingCart.js"></script>
</head>
<body>
<h1 class="title">Wee Ones Toys</h1>
<h3 class="title">for your little girls and boys!</h3>
    <form id="buyIt">
    <?php
    foreach ($_SESSION['itemsForSale'] as $item) {
    ?>
    <div class="item" id="<?php echo($item['id']) ?>">
      <img src="<?php echo($item['imageURL']) ?>" />
      <select name="Quantity" id="howMany_<?php echo($item['id']) ?>">
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
    </form>
    <form action="reviewCart.php">
    <input type="submit" value="View Cart">
    </form>
  <div id="cart" style="display: none">
  </div>
</body>
</html>