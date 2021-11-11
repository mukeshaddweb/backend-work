<?php
    include "connection.php";
    session_start();
    if($_SESSION['aemail']==''){
        header('Location:login.php');
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
        <a class="nav-link" href="flogout.php">outlog</a>
    </li>
</ul>

<div class="container-fluid">
    <h1>Hello <?php echo $_SESSION['aname']; ?></h1>
</div>

    <?php
        $sql = "select * from product_info";
        $query = mysqli_query($sql) or die("product table query failed.");
        $rows=mysqli_num_rows($query);
    ?>

<table class="">
    <thead class="">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Tag</th>
            <th>Description</th>
            <th>Type</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // while($row=mysqli_fetch_array($query)){
        //     echo "<tr>";
        //     $uid = $row['id'];
        //     echo "<th scope = 'row'>".$row['id']."</th>";
        //     echo "<td>".$row['name']."</td>";
        //     echo "<td><img src='".$row['image_url']."'></td>";
        //     echo "<td>".$row['price']."</td>";
        //     echo "<td>".$row['tag']."</td>";
        //     echo "<td>".$row['description']."</td>";
        //     echo "<td>".$row['type']."</td>";
        //     echo "<td>".$row['category']."</td>";
        //     echo "<td><a href=fupdate.php?id=$uid>Edit</a></td>";
        //     echo "<td><a href=fdelete.php?id=$uid>Delete</a></td>";            
        //     echo "</tr>";
        // }
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


<?php
    
?>