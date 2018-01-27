<nav class="" role="navigation">
	<div class="nav-wrapper container">
		<a href="#" class="brand-logo"><?php echo $title; ?></a>
		<ul class="right">
			<li <?php if($title == "Store") echo 'class="active"'; ?>><a href="index.php"><i class="material-icons">home</i></a></li>
			<li <?php if($title == "View Cart") echo 'class="active"'; ?>><a href="#" id="btn-vcart"><i class="material-icons">shopping_cart</i></a></li>
		</ul>
	</div>
</nav>