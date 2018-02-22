function activate(card) {
   alert('card activated');
   $(card).addClass('active');
   //$(card).innerHTML = '<img src="' + $(card).id + '.jpg" />';
}

function deactivate(card) {
   $(card).removeClass('active');
   //$(card).innerHTML = '';
}

function removeCard(card) {
   $(card).addClass('inactive');
   //$(card).style('background-color: none;');
}

var score = 0;

function flipCard(myCard) {
   //alert("You made it");
   //var numActive = $('div.active').length;
   //alert(numActive);
   if($(myCard).hasClass('inactive')) {
   }
   else {
      activate(myCard);
      var numActive = $('div.active').length;
      switch(numActive){
         case 1:
            break;
         case 2:
         alert('case 2');
            var activeCards = document.querySelectorAll('.active');
            if(activeCards[0].id == activeCards[1].id) {
               alert('match');
               score += 5;
               deactivate(activeCards[0]);
               deactivate(activeCards[1]);
               removeCard(activeCards[0]);
               removeCard(activeCards[1]); 
            }
            else {
               alert('no match');
               if (score > 0) {
                  score -= 1;
               }
               deactivate(activeCards[0]);
               deactivate(activeCards[1]);
            }
            break;
//         case 2:
//         alert('case 2');
//            var activeCards = document.querySelectorAll('.active');
//            deactivate(activeCards[0]);
//            deactivate(activeCards[1]);
//            break;
      }
      document.getElementById('score').innerHTML = score;
   }



































/*   var cardShowing = false;
   if (cardShowing == false) {
      myCard.innerHTML = '<img src="' + myCard.id + '.jpg" />';
      cardShowing = true;
   } */
}