function gameOver() {
   //alert('gets to game over');
   var gameOver = false;
   var inactiveCards = document.getElementsByClassName('inactive');
   //alert(inactiveCards.length);
   if(inactiveCards.length == 12) {
      gameOver = true;
   }
   else {
      gameOver = false;
   }
   return gameOver;
}

function activate(card) {
   alert('card activated');
   $(card).addClass('active');
   //alert($(card).attr('id'));
   $(card).html('<img src="' + $(card).attr('id') + '.jpg" />');
}

function deactivate(card) {
   $(card).removeClass('active');
   $(card).html('');
}

function removeCard(card) {
   $(card).addClass('inactive');
   $(card).css("background-color","transparent");
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
               document.getElementById('score').innerHTML = score;
               deactivate(activeCards[0]);
               deactivate(activeCards[1]);
               removeCard(activeCards[0]);
               removeCard(activeCards[1]);
               if (gameOver() == true) {
               //if yes use jquery ajax to send score to php 
                  //alert("game Over");
               }
            }
            else {
               alert('no match');
               if (score > 0) {
                  score -= 1;
                        document.getElementById('score').innerHTML = score;
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
      //document.getElementById('score').innerHTML = score;
   }



































/*   var cardShowing = false;
   if (cardShowing == false) {
      myCard.innerHTML = '<img src="' + myCard.id + '.jpg" />';
      cardShowing = true;
   } */
}