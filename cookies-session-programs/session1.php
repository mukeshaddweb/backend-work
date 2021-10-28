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
        email:
        <input type="email" name="email"><br><br>
        <input type="checkbox" name="remember-me" id="">remember-me<br><br>
        <input type="submit" name="submit"><br><br>
        
    </form>
    </div>
    
    
</body>
</html>

<?php
    if(!empty($_POST['submit'])){
    $a=$_POST["username"];
    $b=$_POST["email"];
    echo $a;
    if(isset($_POST['remember-me'])){
    session_start();
    $_SESSION["user"] = $a;
    $_SESSION["email"] = $b;

    

    // parse_str("username=$a&email=$b");
    header('Location:session1.2.php');
    }
    }else{
        echo "submit after filling the form.";
    }
    
?>