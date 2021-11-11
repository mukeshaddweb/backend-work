<?php
    include "connection.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>insert product</title>
    <style>
        .form{
            width:50%;
            margin-left: 120px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
  </head>
  <body>
   <!-- ........nav start..... -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">YourShop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
              </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- ............nav ends.......... -->

    <div class="form">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
              
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
                
            <input type="submit" name="login" value="login" class="btn btn-primary">
          </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<?php
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

            $sql = mysqli_query($con, "select * from admins where email='$email' and password='$password'") or die("login query failed.");
            $rows = mysqli_num_rows($sql);
            $row = mysqli_fetch_array($sql);
            if($rows>0){
                echo "login successfull.";
                session_start();
                $_SESSION['aname']=$row['name'];
                $_SESSION['aemail']=$row['email'];
                header('Location:dashboard.php');
            }else{
                echo "incorrect username or password.";
            }

    }
?>


