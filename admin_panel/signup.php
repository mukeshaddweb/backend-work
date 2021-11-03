<?php
	session_start();
	if($_SESSION['admin-email'] != ''){
		echo "<h3 style='text-align: center; margin-left: 20px;'><a href='logout.php'>Logout</a></h3>";
		echo "<h3 style='text-align: center; margin-left: 20px;'><a href='dashboard.php'>Dashboard</a></h3>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="signup.css">
	<title>Insert</title>
</head>
<body>

	<div class="form">
		<form action="" method="post">
			<input type="number" name="id" placeholder="Enter id"><br>
			<input type="text" name="name" placeholder="Enter name"><br>
			<input type="email" name="email" placeholder="Enter email"><br>
			<input type="tel" name="phone" placeholder="Enter phone"><br>
			<textarea name="address" rows="5" cols="25" placeholder="Enter Address"></textarea><br>
			<input type="password" name="password" placeholder="Enter password"><br>
			<input type="submit" name="submit" value="submit">
			<input type="reset" name="">
		</form>
	</div>

</body>
</html>

<?php
	include "connection.php";
	error_reporting(0);

	if(isset($_POST['submit'])){

		$sid = $_POST['id'];
		$sname = $_POST['name'];
		$semail = $_POST['email'];
		$sphone = $_POST['phone'];
		$saddress = $_POST['address'];
		$spassword = $_POST['password'];



		$sql = mysqli_query($con, "insert into student(id,name,email,phone,address,password) values($sid,'$sname','$semail',$sphone,'$saddress','$spassword')") or die("query failed.");

		if($sql){
			echo "data inserted successfully.";
			header('Location:dashboard.php');
		}else{
			echo "failed to insert data.";
		}
	}

	mysqli_close($con);

?>