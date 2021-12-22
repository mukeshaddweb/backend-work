var express = require("express");
var app = express();
var bodyParser = require('body-parser'); //Middleware

app.use(express.json());
app.use(express.urlencoded({ extended:false }));


//setting route to homepage
app.get('/', (req, res)=>{
    res.sendFile(__dirname + '/form.html');
});

app.post('/show',(req, res)=>{
    const id = req.body.id;
    const name = req.body.name;
    res.send('Id:'+id+',Name:'+name);
    console.log("Id "+req.body.id);
    console.log("name "+req.body.name);
});

const port = 3350;
app.listen(port, ()=>console.log('The app is listening on port 3350'));
