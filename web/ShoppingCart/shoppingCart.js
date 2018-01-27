function addToCart(id) {
  $.post( "variables.php", { itemId: id, quantity: $('#howMany_'+id).find(":selected").text() } ).done(function(msg){ alert("Added to cart."); });
}

function updateTotal(id) {
  $.post( "variables.php", { 
    itemId: id, 
    quantity: $('#howMany_'+id).val() 
  } );
  $num = $("#howMany_" + id).val();
  $price = $('#hidden_'+id).val();
  $newTotal = $num * $price;
  $('#price_'+id).innerHTML('$ ' + $newTotal);
  $totalAll = 0;
  $('td[id^="price_"]').each(function() {
    $totalAll += this.textContent;
  })
  $('#total').innerHTML($totalAll);
}

