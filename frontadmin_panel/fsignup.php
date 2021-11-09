<?php
    include "connection.php";
    ob_start();
	session_start();
    $check = 0;
	if($_SESSION['adminemail'] != ''){
        $admin_name = $_SESSION['adminname'];
		$check = 1;
	}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?php if($check){echo "Insert";}else{echo "Signup";} ?></title>

    <style>
        .form {

            width: 40%;
            margin-left: 400px;
            margin-top: 10px;
            border: darkorange solid;
            box-shadow: 10px 10px 10px 7px;
            padding: 30px 52px;
            background: linear-gradient(orange, yellow, white);
        }

        .logout {
            margin-left: 888px;
        }

        .header {
            background: orange;
            padding: 23px 36px;
        }

        a.nav-link {
            color: black;
            font-size: 19px;
        }

        h1 {
            text-align: center;
            margin: 23px 0;
        }
    </style>
</head>

<body>
    <ul class="nav header">
        <li class="nav-item">
            <a class="nav-link" href="fdashboard.php"><?php if($check){echo "Dashboard";} ?></a>
            <a class="nav-link" href="flogin.php">
                <?php if(!$check){echo "Login";} ?>
            </a>
        </li>
        <li class="nav-item logout">
            <a class="nav-link" href="flogout.php">
                <?php if($check){echo "Logout";} ?>
            </a>
        </li>
    </ul>

    <div class="container-fluid">
        <h1>
            <?php if($check){
                echo "Hello ".$admin_name;
            } 
            ?>
        </h1>
    </div>

    <div class="form">
        <form method="post">
            <div class="form-group">
                <label for="formGroupExampleInput">ID</label>
                <input type="number" name="id"  class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Name</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput2" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Email</label>
                <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Phone</label>
                <input type="tel" name="phone" class="form-control" id="formGroupExampleInput2" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Address</label>
                <input type="text" name="address" class="form-control" id="formGroupExampleInput2" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Password</label>
                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" id="formGroupExampleInput2" placeholder="">
            </div>
            
            <input type="submit" name="submit" value="<?php if($check){
                echo "Insert";
            }else{
                echo "Sign up";
            } 
            ?>" class="btn btn-primary">
            <input type="reset" name="Reset" value="Reset" class="btn btn-primary">
        </form>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>

<?php
	// include "connection.php";
	error_reporting(0);

	if(isset($_POST['submit'])){

		$sid = $_POST['id'];
		$sname = $_POST['name'];
		$semail = $_POST['email'];
		$sphone = $_POST['phone'];
		$saddress = $_POST['address'];
		$spassword = $_POST['password'];
        $scpassword = $_POST['cpassword'];

        if($spassword == $scpassword){
            // $mysql = "insert into student(id,name,email,phone,address,password) values($sid,'$sname','$semail',$sphone,'$saddress','$spassword')";
        // echo $mysql;
        $sql = mysqli_query($con, "insert into student(id,name,email,phone,address,password) values($sid,'$sname','$semail',$sphone,'$saddress','$spassword')") or die("query failed.");
        // echo $sql;

        if($sql){
            echo "data inserted successfully.";
            if($check){
                header('Location:fdashboard.php');
            }else{
                header('Location:flogin.php');
            }
            
        }else{
            echo "failed to insert data.";
        }

        }else{
            echo "password should match.";
        }


        
	}

	mysqli_close($con);

?>