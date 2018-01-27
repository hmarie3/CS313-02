<?php
// Start Session
if ( session_status() == PHP_SESSION_NONE || session_id() == '' )
	session_start();

// check for POST data
if ( isset( $_POST['itemId'] ) ) {
	updateCart( $_POST['itemId'], $_POST['amount'] );
}

// variables
if ( !isset( $_SESSION['cart'] ) )
	$_SESSION['cart'] = array();

// This should be stored in a database
$_SESSION['itemsInStore'] = array(
	array(
		'id' => 1,
		'name' => 'Ring',
		'price' => 125.67,
		'desc' => 'This is a ring!!!',
		'imageURL' => 'imgHolder.img'
	),
	array(
		'id' => 2,
		'name' => 'Shirt',
		'price' => 25.87,
		'desc' => 'This is a shirt!!!',
		'imageURL' => 'imgHolder.img'
	),
	array(
		'id' => 3,
		'name' => 'Pants',
		'price' => 75.67,
		'desc' => 'This is a pair of pants!!!',
		'imageURL' => 'imgHolder.img'
	),
	array(
		'id' => 4,
		'name' => 'Shirt',
		'price' => 25.87,
		'desc' => 'This is a shirt!!!',
		'imageURL' => 'imgHolder.img'
	),
	array(
		'id' => 5,
		'name' => 'Pants',
		'price' => 75.67,
		'desc' => 'This is a pair of pants!!!',
		'imageURL' => 'imgHolder.img'
	),
	array(
		'id' => 6,
		'name' => 'Pants',
		'price' => 75.67,
		'desc' => 'This is a pair of pants!!!',
		'imageURL' => 'imgHolder.img'
	),
);

// functions
function updateCart($itemId, $num) {
	if ( findInCart($itemId) ) {
		foreach ($_SESSION['cart'] as &$value) {
			if ( $value['id'] == $itemId ) {
				/*if ( !isset($value['name']) ) {
					$item = getItemInfo($itemId);
					$value['name'] = $item['name'];
					$value['price'] = $item['price'];
					echo $item['name'];
				}*/
				$value['amount'] = $num;
				break;
			}
		}
		unset($value);
	}
	else {
		$item = getItemInfo($itemId);
		var_dump($item);
		$_SESSION['cart'][] = array(
			'id' => $itemId,
			'amount' => $num,
			'name' => $item['name'],
			'price' => $item['price'],
		);
	}
}

function findInCart($itemId) {
	foreach ($_SESSION['cart'] as $item) {
		if ( $item['id'] == $itemId )
			return $item;
	}
	return false;
}

function getItemInfo($itemId) {
	foreach ($_SESSION['itemsInStore'] as $item) {
		if ( $item['id'] == $itemId ) {
			return $item;
		}
	}
}