<?php
    ob_start();
    session_start();
    if($_SESSION['adminemail']==''){
        header('Location:flogin.php');
    }else{
        include "connection.php";
        $admin_name = $_SESSION['adminname'];
        // echo "$_SESSION['admin-name']";
        // echo $admin_name;
        
        $query = mysqli_query($con, "select * from student") or die("error in query.");

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

    <title>Dashboard</title>

    <style>
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
        <a class="nav-link" href="#">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="fsignup.php">Insert</a>
    </li>
    <li class="nav-item logout">
        <a class="nav-link" href="flogout.php">Logout</a>
    </li>
</ul>

<div class="container-fluid">
    <h1>Hello <?php echo "$admin_name"; ?></h1>
</div>

<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Password</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($row=mysqli_fetch_array($query)){
            echo "<tr>";
            $uid = $row['id'];
            echo "<th scope = 'row'>".$row['id']."</th>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td><a href=fupdate.php?id=$uid>Edit</a></td>";
            echo "<td><a href=fdelete.php?id=$uid>Delete</a></td>";            
            echo "</tr>";
        }

    }

    ?>
    </tbody>
</table>

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


