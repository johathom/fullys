var express = require('express');
var app = express();
app.set('views', './views')
app.set('view engine', 'jade')
var fs = require('fs');
app.use(express.static('public'));
var bodyParser = require('body-parser');
app.use(bodyParser.json({limit: '500mb'}));
app.use(bodyParser.urlencoded({ extended: false }));
var fullDataArr = maketheDataArr();
var newDataArr = maketheDataArr();
//var php = require("php"); 
var path = require("path"); 

//app.use("/", php.cgi("/path/to/wordpress")); 

app.get('/start', function (req, res) {
  res.render('start', {});
});

function maketheDataArr() {
  var fs = require('fs');
  var buf = fs.readFileSync("applicantdata.csv", "utf8");
  var bufferString = buf.toString().trim();
  fullDataArr = [];
  console.log("working1")
  if (bufferString) {
    DataArr = bufferString.split('\n').map(line => {
      return line.split(',')
    });
  }
  return DataArr;
}

app.post('/orig_submit/', function (req,res) {
  var fs = require('fs');
  fullDataArr.push([req.body.original_email]);
  res.redirect('/aboutyou');
})

app.get('/aboutyou', function (req, res) {
  res.render('aboutyou');
});

app.post('/submit1/', function (req, res) {
  var fs = require('fs');
  fullDataArr.push([req.body.gender,req.body.first_name,req.body.middle_name,req.body.last_name,req.body.email,req.body.primaryphone,req.body.secondphone,req.body.birthdate,req.body.addidtype,req.body.id,req.body.state,req.body.expiration,req.body.SSN,req.body.movein,req.body.leaselength,req.body.comments]);
  res.redirect('/addtinfo');
});

app.get('/addtinfo', function (req, res) {
  res.render('addtinfo');
});

app.post('/submit2/', function (req, res) {
  var fs = require('fs');
  fullDataArr.push([req.body.former_name,req.body.height,req.body.martial_status,req.body.eye_color,req.body.hair_color,req.body.street_line1,req.body.street_line2,req.body.street_line3,req.body.city,req.body.state,req.body.zip,req.body.res_type,req.body.res_leaving,req.body.curr_movein,req.body.curr_moveout,req.body.curr_payment,req.body.ownedrented,req.body.comm_name,req.body.manager_name,req.body.manager_phone,req.body.street_line1p,req.body.street_line2p,req.body.street_line3p,req.body.cityp,req.body.statep,req.body.zipp,req.body.res_typep,req.body.res_leavingp,req.body.curr_moveinp,req.body.curr_moveoutp,req.body.curr_paymentp,req.body.ownedrentedp,req.body.comm_namep,req.body.manager_namep,req.body.manager_phonep,req.body.vehicles_owned,req.body.renting_car,req.body.rent_sue,req.body.damage_sue,req.body.evicted,req.body.defaulted,req.body.bankruptcy,req.body.smoke]);
  res.redirect('/financial')
});

app.get('/financial', function (req, res) {
  res.render('financial');
});

app.post('/submit3/', function (req, res) {
  var fs = require('fs');
  fullDataArr.push([req.body.income,req.body.money]);
  res.redirect('/people')
});

app.get('/people', function (req, res) {
  res.render('people');
});

app.post('/submit4/', function (req, res) {
  var fs = require('fs');
  fullDataArr.push([req.body.roommates,req.body.efirst_name,req.body.elast_name,req.body.relationship,req.body.ephone,req.body.estreet1,req.body.estreet2,req.body.estreet3,req.body.ecity,req.body.estate,req.body.ezip]);
  fs.writeFileSync("applicantdata.csv", fullDataArr.join('\n'));
  res.redirect('/payment')
});

app.get('/payment', function (req, res) {
  res.render('payment');
});

var server = app.listen(3000, function () {
  var host = server.address().address;
  var port = server.address().port;

  console.log('Example app listening at http://%s:%s', host, port);
});





