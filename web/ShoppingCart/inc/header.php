<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<!-- Compiled and minified MaterializeCSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="inc/css/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	

	<script type="text/javascript">
		$(document).ready(function(){
	    	$('.parallax').parallax();
	    	$('#btn-vcart').click(function() {
	    		$('#vcart').addClass("scale-in").removeClass("scale-out");
	    	});
	    	$('.btn-close').click(function() {
	    		$('#vcart').addClass("scale-out").removeClass("scale-in");
	    	});
	    	// add item to cart
	    	$('.btn-item').click(function() {
	    		$amount = $('#amount_' + $(this).attr('id')).val();
	    		$.ajax({
	    			type: "POST",
	    			url: "inc/data.php",
	    			data: { itemId: $(this).attr('id'), amount: $amount },
	    		}).done(function( msg ) {
	    			alert("success: " + msg);
	    		});
	    	});
	    });
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>