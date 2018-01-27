<?php
if (session_status() == PHP_SESSION_NONE || session_id() == '')
{
  session_start();
}

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

if (isset($_POST['itemId'])) {
  $valuesAdded = false;
  foreach ($_SESSION['cart'] as &$item) {
    if ($item['id'] == $_POST['itemId']) {
      $item['quantity'] = $_POST['quantity'];
      $valuesAdded = true;
      break;
    }
  }
  unset($item);
  if ($valuesAdded == false) {
    $_SESSION['cart'][] = array(
      'id' => $_POST['itemId'],
      'quantity' => $_POST['quantity']
      );
  }
}

$_SESSION['itemsForSale'] = array(
  array(
    'id' => 1,
    'name' => 'Duck',
    'price' => 4.25,
    'description' => 'This is a duck.',
    'imageURL' => 'duck.jpeg' 
  ),
  array(
    'id' => 2,
    'name' => 'Truck',
    'price' => 6.25,
    'description' => 'This is a truck.',
    'imageURL' => 'truck.jpeg' 
  ),
  array(
    'id' => 3,
    'name' => 'Doll',
    'price' => 9.25,
    'description' => 'This is a doll.',
    'imageURL' => 'doll.jpeg' 
  ),
  array(
    'id' => 4,
    'name' => 'Rattle',
    'price' => 3.25,
    'description' => 'This is a rattle.',
    'imageURL' => 'rattle.jpeg' 
  )
);
?>