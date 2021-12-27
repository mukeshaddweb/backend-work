const path = require('path');
const express = require('express');
const ejs = require('ejs');
const bodyParser = require('body-parser');
const app = express();
const mysql = require('mysql');

const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'school1'
});

connection.connect(function(err){
    if(err) console.log(err);
    else console.log('Database connected!');
});

//set views file
app.set('views', path.join(__dirname,'views'));

//set view engine
app.set('view engine', 'ejs');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: false }));

app.get('/',(req,res)=>{

    let sql = "select * from student";
    let query = connection.query(sql,(err, rows) => {
        if(err) throw err;
    
    res.render('student_index', {
        title: 'Crud operations using nodejs',
        student : rows
    });
})
});

app.get('/add',(req,res)=>{

    // let sql = "select * from student";
    // let query = connection.query(sql,(err, rows) => {
    //     if(err) throw err;
    
    res.render('student_add', {
        title: 'crud operation using nodejs',
        // student : rows
    });
// })
});

app.post('/show',(req,res) => {
    let data = {
        id: req.body.id,
        name: req.body.name,
        email: req.body.email,
        phone: req.body.phone,
        address: req.body.address,
        password: req.body.password
    };
    let sql = "insert into student set ?";
    let query = connection.query(sql,data,(err, results)=>{
        if(err) throw err;
        res.redirect('/');
    });
})

app.post('/update',(req,res) => {
        const id= req.body.id;
        const name= req.body.name;
        const email= req.body.email;
        const phone= req.body.phone;
        const address= req.body.address;
        const password= req.body.password;
    let sql = `update student set name="${name}", email="${email}", phone=${phone}, address="${address}", password="${password}" where id=${id}`;
    let query = connection.query(sql,(err, results)=>{
        if(err) throw err;
        res.redirect('/');
    });
})

app.get('/edit/:studentId', (req, res)=>{
    const studentId = req.params.studentId;
    let sql = `select * from student where id=${studentId}`;
    let query = connection.query(sql,(err, result)=>{
        res.render('student_edit',{
            title: 'crud using node js',
            student: result[0]
        })
    })
})

app.get('/delete/:studentId',(req,res)=>{
    const studentId = req.params.studentId;
    let sql = `delete from student where id=${studentId}`;
    let query = connection.query(sql,(err, result)=>{
        if(err) throw err;
        res.redirect('/');
    })
})

app.listen(3300, () => { 
    console.log('server is running at port 3300');
});
