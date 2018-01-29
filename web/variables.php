<?php
if (session_status() == PHP_SESSION_NONE || session_id() == '')
{
  session_start();
}

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}

function addToCart(item, num) {
  if(empty($_SESSION['cart'])) {
    $_SESSION['id'] = array();
    $_SESSION['quantity'] = array();
  }
  $_SESSION['id'][] = item;
  $_SESSION['quantity'][] = num;
  var_dump($_SESSION['id']);
  var_dump($_SESSION['quantity']);
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