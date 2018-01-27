<?php
$total = 0;

?>
<div class="row">
	<button class="btn-close btn-floating right small"><i class="material-icons">close</i></button>
</div>
<ul class="collection">
<?php
foreach ($_SESSION['cart'] as $item) {
	$total += ($item['price'] * $item['amount']);
	?>
	<li class="collection-item avatar">
		<i class="material-icons circle green">chevron_right</i>
		<span class="title"><?php echo $item['name']; ?></span>
		<p>$<?php echo $item['price']; ?> X <?php echo $item['amount']; ?> = $<?php echo $item['price'] * $item['amount']; ?></p>
		<span class="secondary-content">
			<a href="#!" class="right btn-floating btn-small waves-effect waves-light"><i class="material-icons">delete</i></a>  
			<a href="#!" class="right btn-floating btn-small waves-effect waves-light"><i class="material-icons">update</i></a>
		</span>
	</li>
	<?php
}
?>
</ul>