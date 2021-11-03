<?php
    error_reporting(0);
    ob_start();

    session_start();
    if($_SESSION['admin-email']==''){
        header('Location:login.php');
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



<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="signup.css">
	<title>sign-up</title>
</head>
<body>



	<div class="form">
		<form action="" method="post">
			<input type="text" name="name" value="<?php echo $vname; ?>" ><br>
			<input type="email" name="email" value="<?php echo $vemail; ?>" ><br>
			<input type="tel" name="phone" value="<?php echo $vphone; ?>"><br>
			<textarea name="address" rows="5" cols="25"><?php echo $vaddress; ?></textarea><br>
			<input type="password" name="password" value="<?php echo $vpassword; ?>"><br>
			<input type="submit" name="submit" value="submit">
			<input type="reset" name="">
		</form>
	</div>

</body>
</html>

<?php 

    $udname = $_POST['name'];
    $udemail = $_POST['email'];
    $udphone = $_POST['phone'];
    $udaddress = $_POST['address'];
    $udpassword = $_POST['password'];
    echo $udaddress;

    include "connection.php";
$query="update student set name='$udname',email= '$udemail',phone=$udphone,address='$udaddress',password='$udpassword' where id=$uid";
echo $query;
    $usql = mysqli_query($con,$query) or die("second query failed.");

		if($usql){
			echo "data inserted successfully.";
            header('Location:dashboard.php');
		}else{
			echo "failed to update data.";
		}
    
}
?>