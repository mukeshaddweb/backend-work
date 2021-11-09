<?php
    error_reporting(0);
    ob_start();

    session_start();
    if($_SESSION['adminemail']==''){
        header('Location:flogin.php');
}else{
    $uid = $_GET['id'];

    include "connection.php";
    
    
    // getting the previous info
    $sql = "select * from student where id='$uid'";

	$query = mysqli_query($con,$sql) or die("query failed.");

    $row_details = mysqli_fetch_array($query);
    $vname = $row_details['name'];
    $vemail = $row_details['email'];
    $vphone = $row_details['phone'];
    $vaddress = $row_details['address'];
    $vpassword = $row_details['password'];

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

    <title>Update</title>

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
            <a class="nav-link" href="fdashboard.php">Dashboard</a>
        </li>
        <li class="nav-item logout">
            <a class="nav-link" href="flogout.php">
                Logout
            </a>
        </li>
    </ul>

    <div class="container-fluid">
        <h1>
            <?php
                echo "Hello ".$admin_name;
            ?>
        </h1>
    </div>

    <div class="form">
        <form method="post">
            
            <div class="form-group">
                <label for="formGroupExampleInput2">Name</label>
                <input type="text" name="name" value="<?php echo $vname; ?>" class="form-control" id="formGroupExampleInput2" >
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Email</label>
                <input type="email" name="email" value="<?php echo $vemail; ?>" class="form-control" id="formGroupExampleInput2" >
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Phone</label>
                <input type="tel" name="phone" value="<?php echo $vphone; ?>" class="form-control" id="formGroupExampleInput2" >
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Address</label>
                <input type="text" name="address" value="<?php echo $vaddress; ?>" class="form-control" id="formGroupExampleInput2" >
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Password</label>
                <input type="password" name="password" value="<?php echo $vpassword; ?>" class="form-control" id="formGroupExampleInput2" >
            </div>
            <input type="submit" name="update" value="update" class="btn btn-primary">
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
    if(isset($_POST['update'])){
        $udname = $_POST['name'];
    $udemail = $_POST['email'];
    $udphone = $_POST['phone'];
    $udaddress = $_POST['address'];
    $udpassword = $_POST['password'];
    echo $udaddress;

    include "connection.php";
$query="update student set name='$udname',email= '$udemail',phone=$udphone,address='$udaddress',password='$udpassword' where id=$uid";
// echo $query;
    $usql = mysqli_query($con,$query) or die("second query failed.");

		if($usql){
			echo "data inserted successfully.";
            header('Location:fdashboard.php');
		}else{
			echo "failed to update data.";
		}
    }      
}
?>