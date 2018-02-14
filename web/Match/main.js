

function flipCard(myCard) {
   var cardShowing = false;

// if card is not showing display picture of div id + ".jpg" and set showing to true
   if (cardShowing == false) {
      myCard.innerHTML = '<img src="' + myCard.id + '.jpg" />';
      cardShowing = true;
   }
// if card is showing remove/hide card and set showing to false
   //else (cardShowing == true) {
   //   myCard.innerHTML = '';
     // cardShowing = false;
   //}
}



// if 2 cards are displayed check match 
//yes +5pts, turn cards white
//no -1pt, turn card green

