<?php
    error_reporting(0);
    ob_start();
    session_start();
    if($_SESSION['admin-email']==''){
        header('Location:login.php');
    }else{
        include "connection.php";
        $admin_name = $_SESSION['admin-name'];
        $_SESSION['admin-name'];

        echo "<h3 style='text-align: center; margin-left: 20px;'><a href='logout.php'>Logout</a></h3>";

        echo "<h3 style='text-align: center; margin-left: 20px;'><a href='signup.php'>Insert</a></h3>";
        
        echo "<h1 style='text-align: center; margin-left: 20px;'>Hello ".$admin_name."</h1>";
        
        $query = mysqli_query($con, "select * from student") or die("error in query.");

        // $row = mysqli_fetch_array($query);

        echo "<div 
        style='margin: 50px 0px 100px 330px;'><table border='3'><tr><th>ID</th> <th>Name</th> <th>Email</th> <th>Phone</th> <th>Address</th> <th>Password</th> <tr>";
        while($row=mysqli_fetch_array($query)){
            echo "<tr>";
            $uid = $row['id'];
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td><a href=update.php?id=$uid>Edit</a></td>";
            echo "<td><a href=delete.php?id=$uid>Delete</a></td>";            
            echo "</tr>";
        }
        echo "</table></div>";
    }

?>