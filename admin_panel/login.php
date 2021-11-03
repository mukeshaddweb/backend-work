<?php
	include "connection.php";
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<style>
		.form a{
			text-decoration: none;
			border: black thin;
			color: black;
		}
	</style>
</head>
<body>
	
		
	<div class="form">
		<form action="" method="post">
			<input type="email" name="email" placeholder="enter Email"><br>
			<input type="password" name="password" placeholder="enter password"><br>
			<input type="submit" name="login" value="login">
			<input type="submit" name="signup" value="signup">
		</form>
	</div>

</body>
</html>

<?php


	
	if(isset($_POST['login'])){

		

		$semail = $_POST['email'];
		$spassword = $_POST['password'];

		$sql = "select * from student where email='$semail' and password='$spassword'";

		$query = mysqli_query($con,$sql) or die("query failed.");
		$rows = mysqli_num_rows($query);
		$row = mysqli_fetch_array($query);
		

		if($query>0){
			// echo "login successful";
			session_start();
			$_SESSION['admin-email']=$semail;
			$_SESSION['admin-name']=$row['name'];
			

			header('Location:dashboard.php');

		}else{
			echo "login failed!<br>Incorrect password or email.";
		}
		
	}

	if(isset($_POST['signup'])){
		header('Location:signup.php');
	}

?>