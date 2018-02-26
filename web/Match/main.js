/***********************************************************************************************************
*  Author: Heather Brune
*  Summary: This is the javascript that runs the game board.
************************************************************************************************************/

function gameOver() {
   //checks to see how many inactive cards there are, all inactive means game over
   var gameOver = false;
   var inactiveCards = document.getElementsByClassName('inactive');
   if(inactiveCards.length == 12) {
      gameOver = true;
   }
   else {
      gameOver = false;
   }
   return gameOver;
}

function activate(card) {
   //activates cards to put them in play and turn them over
   $(card).addClass('active');
   //"turns" the card "over"
   $(card).html('<img src="' + $(card).attr('id') + '.jpg" />');
}

function deactivate(card) {
   //deactivates cards to turn them back over but keep them in play
   $(card).removeClass('active');
   $(card).html('');
}

function removeCard(card) {
   //removed card from game play
   $(card).addClass('inactive');
   //makes card invisible so it seems to be gone
   $(card).css("background-color","transparent");
}

var score = 0;

function flipCard(myCard) {
   //any time a card is click check the status of the card
   if($(myCard).hasClass('inactive')) {
      //if the card is inactive it is not in play, do nothing
   }
   else {
      //in the card is not inactive
      activate(myCard);
      //how many cards are active?
      var numActive = $('div.active').length;
      switch(numActive){
         case 1:   //one card is active, it's not already flipped over, do nothing else
            break;
         case 2:   //if 2 cards are now active we must compare them
            //creates an array of all cards with the class active
            var activeCards = document.querySelectorAll('.active');
            //compare the id's of the cards 
            if(activeCards[0].id == activeCards[1].id) {
               //if they match get 5 points
               score += 5;
               document.getElementById('score').innerHTML = score;
               //deactivate both cards, timeout required so card is visible before code executes
               setTimeout(function() { deactivate(activeCards[0]) }, 2000);
               setTimeout(function() { deactivate(activeCards[1]) }, 2000);
               //remove matched cards from the game board
               setTimeout(function() { removeCard(activeCards[0]) }, 2000);
               setTimeout(function() { removeCard(activeCards[1]) }, 2000);
               /*
               //I could not get this working to capture the score and send it to php
               if (gameOver() == true) {
               //if yes use jquery ajax to send score to php
                  var finalScore = $('#score').val();
                  $.ajax({
                     type: "POST",
                     url: "gameOver.php",
                     data: {
                        finalScore:score,
                        userid:userid
                     },
                     dataType: "JSON",
                     done: function(data) {
                        alert("data sent successfully");
                     },
                     fail: function(err) {
                        alert("there was an error");
                     }
                  });
                  alert("game Over");
               }
               */
            }
            else {
               //it the id's don't match you lose 1 point, but only if you have points
               if (score > 0) {
                  score -= 1;
                        document.getElementById('score').innerHTML = score;
               }
               //deactive cards only to turn them "face down" but keep them in play
               setTimeout(function() { deactivate(activeCards[0]) }, 2000);
               setTimeout(function() { deactivate(activeCards[1]) }, 2000);
            }
            break;
      }
   }
}