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
    <h1 class="mt-4">Dashboard</h1>

    <div class="container table">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Password</th>
              </tr>
            </thead>
            <tbody>

                <?php
                  try{
                  $pdo = new PDO("mysql:host=localhost;dbname=school1","root","");
                  $sql = "select * from student";
                  $q = $pdo->query($sql);
                  $q->setFetchMode(PDO::FETCH_ASSOC);
                  while($row=$q->fetch()){

                  
                ?>
              <tr>
                <th scope="row"><?php echo $row['id'];?></th>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['password'];?></td>
              </tr>
              <?php 
                } 
                
              }catch(PDOException $e){
                die("could not connect to the database :".$e->message());
              }
                ?>
              
            </tbody>
          </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


    

</body>

</html>

