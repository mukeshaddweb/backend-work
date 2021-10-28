<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form method = "post">
        username:
        <input type="text" name="username" id=""><br><br>
        password:
        <input type="password" name="password"><br><br>
        <input type="checkbox" name="remember-me" id="">remember-me<br><br>
        <input type="submit" name="submit"><br><br>
        
    </form>
    </div>
    
    
</body>
</html>

<?php

    if(isset($_POST['submit'])){
    if(!empty($_POST['remember-me'])){
        setcookie
        ("username", $_POST['username'], time()+3600);
        setcookie
        ("password", $_POST['password'], time()+3600);
        echo "<br>Cookies set successfully.<br>";
        
    }else{
        setcookie("username","");
        setcookie("password","");
        echo "<br>Cookie not set<br>";

    }
    header('Location:cookie1print.php');
}

?>