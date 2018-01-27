<?php
include_once("{$_SERVER['DOCUMENT_ROOT']}/Tutorials/ShoppingCart/inc/data.php");

$title = 'Store';

include_once("{$_SERVER['DOCUMENT_ROOT']}/Tutorials/ShoppingCart/inc/header.php");
include_once("{$_SERVER['DOCUMENT_ROOT']}/Tutorials/ShoppingCart/inc/nav.php");
?>
<div id="vcart" class="card right scale-transition scale-out">
	
	<?php include("{$_SERVER['DOCUMENT_ROOT']}/Tutorials/ShoppingCart/viewCart.php"); ?>
</div>
<div id="index-banner" class="parallax-container">
	<div class="section no-pad-bot">
		<div class="container">
			<br />
			<br />
			<h1 class="header center white-text">Cynthia's Super Cool Store!</h1>
		</div>
	</div>
	<div class="parallax"><img src="https://lorempixel.com/920/920/nature" alt="Unsplashed background" style="display: block; transform: translate3d(-50%, 237px, 0px);"></div>
</div>
<div class="container">
	<div class="section">
		<div class="row">
		<?php
		foreach ($_SESSION['itemsInStore'] as $item) {
			$cart = findInCart($item['id']);
		?>
			<form class="col s4">
				<article class="card hoverable z-depth-5">
					<div class="card-image">
						<img src="https://lorempixel.com/150/150/nature/<?php echo $item['id']; ?>">
						<span class="card-title"><?php echo $item['name']; ?></span>
						<div class="btn-floating input-field col s3 left halfway-fab input-floating">
							<input type="number" id="amount_<?php echo $item['id']; ?>" value="<?php if (!$cart) echo 0; else echo $cart['amount']; ?>">
						</div>
						<button id="<?php echo $item['id']; ?>" class="btn-item btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></button>
					</div>
					<div class="card-content">
						<p><?php echo $item['desc']; ?></p>
					</div>
				</article>
			</form>
		<?php
			if ( $item['id']/3 === 0) {
				?>
		</div>
		<div class="row">
			<?php
			}
		}
		?>
		</div>
	</div>
	</div>
<?php
include_once("{$_SERVER['DOCUMENT_ROOT']}/Tutorials/ShoppingCart/inc/footer.php");