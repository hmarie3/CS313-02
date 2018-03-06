var express = require('express');
var app = express();
var bodyParser = require('body-parser');

app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
app.set('view engine', 'ejs');
app.set('port', (process.env.PORT || 5000));

app.get('/', function(req, res) {
   res.render('home');
});

app.post('/results', function(req, res) {
   var weight = req.body.weight;
   var type = req.body.type;
   console.log(weight, type);
   var cost = calculateRate(weight, type);
   console.log(cost);
   res.render("results", {
      weight : weight,
      type :  type,
      cost : cost
   });
});

function calculateRate(weight, type){
   var cost;
   switch(type) {
      case 'Letters (stamped)':
         if(weight < 1) {
            cost = 0.50;
         }
         else if(weight >= 1 && weight < 2) {
            cost = 0.71;
         }
         else if(weight >= 2 && weight < 3) {
            cost = 0.92;
         }
         else if(weight >= 3 && weight < 3.5) {
            cost = 1.13;
         }
         break;
      case 'Letters (metered)':
         if(weight < 1) {
            cost = 0.47;
         }
         else if(weight >= 1 && weight < 2) {
            cost = 0.68;
         }
         else if(weight >= 2 && weight < 3) {
            cost = 0.89;
         }
         else if(weight >= 3 && weight < 3.5) {
            cost = 1.10;
         }
         break;
      case 'Large Envelopes (flats)':
         if(weight < 1) {
            cost = 1.00;
         }
         else if(weight >= 1 && weight < 2) {
            cost = 1.21;
         }
         else if(weight >= 2 && weight < 3) {
            cost = 1.42;
         }
         else if(weight >= 3 && weight < 4) {
            cost = 1.63;
         }
         else if(weight >= 4 && weight < 5) {
            cost = 1.84;
         }
         else if(weight >= 5 && weight < 6) {
            cost = 2.05;
         }
         else if(weight >= 6 && weight < 7) {
            cost = 2.26;
         }
         else if(weight >= 7 && weight < 8) {
            cost = 2.47;
         }
         else if(weight >= 8 && weight < 9) {
            cost = 2.68;
         }
         else if(weight >= 9 && weight < 10) {
            cost = 2.89;
         }
         else if(weight >= 10 && weight < 11) {
            cost = 3.10;
         }
         else if(weight >= 11 && weight < 12) {
            cost = 3.31;
         }
         else if(weight >= 12 && weight < 13) {
            cost = 3.52;
         }
         break;
      case 'Parcels':
         if(weight < 4) {
            cost = 3.50;
         }
         else if(weight >= 4 && weight < 8) {
            cost = 3.75;
         }
         else if(weight >= 8 && weight < 9) {
            cost = 4.10;
         }
         else if(weight >= 9 && weight < 10) {
            cost = 4.45;
         }
         else if(weight >= 10 && weight < 11) {
            cost = 4.80;
         }
         else if(weight >= 11 && weight < 12) {
            cost = 5.15;
         }
         else if(weight >= 12 && weight < 13) {
            cost = 5.50;
         }
         break;
   }
   return cost;
}

app.listen(8080, function(req, res) {
   console.log('app is listening on port 8080');
});