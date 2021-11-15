<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Insert using pdo</title>
    <style>
        .form {
            margin-left: 320px;
            width: 700px;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1 class="mt-4">Insert Form</h1>

    <div class="form">
        <form action='' method="post">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ID</label>
                <input type="number" name="id" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone</label>
                <input type="tel" name="phone" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <input type="submit" name="insert" value="insert" class="btn btn-primary">
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


    

</body>

</html>

<?php
    if(isset($_POST['insert'])){

        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $password=$_POST['password'];
        // echo $password;

        try{

            $pdo = new PDO("mysql:host=localhost;dbname=school1","root","");
            // echo "1";
            $sql = "insert into student(id,name,email,phone,address,password) values(:id,:name,:email,:phone,:address,:password)";
            $query = $pdo->prepare($sql) or die("error in query");
            $query->bindParam(':id',$id, PDO::PARAM_STR);
            $query->bindParam(':name',$name, PDO::PARAM_STR);
            $query->bindParam(':email',$email, PDO::PARAM_STR);
            $query->bindParam(':phone',$phone, PDO::PARAM_STR);
            $query->bindParam(':address',$address, PDO::PARAM_STR);
            $query->bindParam(':password',$password, PDO::PARAM_STR);
            // echo $sql;
            $query->execute() or die("error in query.");
            $lastInsertId= $pdo->lastInsertId();
            if($lastInsertId != ""){
                echo "data inserted successfully.";
            }else{
                echo "error in inserting.";
            }
            
            $sql2 = "select * from student";
            $q = $pdo->query($sql);
            $q->setFetchMode(PDO::FETCH_ASSOC);
            while($row=$q->fetch()){} 
        }
        catch(PDOException $e){
            die("could not connect to database :".$e->message());
        }
    }
?>