const express = require("express");
const request = require("request");
const path = require("path");
const bodyParser = require('body-parser');
const ejs = require('ejs');

const app = express();

//set views file
app.set('views',path.join(__dirname,'views'));

//set view engine
app.set('view engine','ejs');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: false}));


app.get('/',(req, res)=>{
    // let city = req.query.city;
    let city = "jaipur";
    const request = require('request');
request("https://api.openweathermap.org/data/2.5/weather?q="+city+"&appid=017beb019c8baffae3c49a6e3a77e102&units=metric", function (error, response, body) {
  if(response.statusCode === 200){
      let data = JSON.parse(body);
      res.render('weather.ejs',{
        city: city,
        temp: data.main.temp,
        desc: data.weather[0].description
      });
      // res.send(`<h1>The weather in your city "${city}" is "${data.weather[0].description}"</h1>`);
  }
  
});
});

app.listen(3500, ()=> console.log("server starting at port 3500"));