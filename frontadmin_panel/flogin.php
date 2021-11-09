<?php
ob_start();
	include "connection.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>

        body{
            background-color: lightgoldenrodyellow;
        }

        .form {

            width: 40%;
            margin-left: 400px;
            margin-top: 130px;
            border: darkorange solid;
            box-shadow: 10px 10px 10px 7px;
            padding: 57px 52px;
            background: linear-gradient(orange, yellow, white);
        }

        button{
            margin: 0px 13px;
        }
    </style>

    <title>Login</title>
</head>

<body>


    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav> -->
    <div class="form">
        <form method="post">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" name="remember-me" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Remember me
                        </label>
                    </div>
                </div>
            </div>
            <input type="submit" name="login" value="login" class="btn btn-primary">
            <input type="submit" name="signup" value="signup" class="btn btn-primary">
        </form>

    </div><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>

<?php
	if(isset($_POST['login'])){


		$semail = $_POST['email'];
    // echo $semail;
		$spassword = $_POST['password'];

        if(isset($_POST['remember-me'])){
            setcookie("cemail",$semail);
            setcookie("cpassword",$spassword);
        }

		$sql = "select * from student where email='$semail' and password='$spassword'";
    //echo $sql;

		$query = mysqli_query($con,$sql) or die("query failed.");
		$rows = mysqli_num_rows($query);
		$row = mysqli_fetch_array($query);
		// echo $row;
		
		if($rows>0){
			//echo "login successful";
			session_start();
			$_SESSION['adminemail']=$semail;
			$_SESSION['adminname']=$row['name'];
    	header("Location:fdashboard.php");
		}
    else{
			echo "login failed!<br>Incorrect password or email.";
		}
	}

	elseif(isset($_POST['signup'])){
		header('Location:fsignup.php');
	}

?>