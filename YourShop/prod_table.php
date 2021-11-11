<?php
    include "connection.php";
    session_start();
    if($_SESSION['aemail']==''){
        header('Location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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
        while($row=mysqli_fetch_array($query)){
            echo "<tr>";
            $uid = $row['id'];
            echo "<th>".$row['id']."</th>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['image_url']."></td>";
            echo "<td>".$row['price']."</td>";
            echo "<td>".$row['tag']."</td>";
            echo "<td>".$row['description']."</td>";
            echo "<td>".$row['type']."</td>";
            echo "<td>".$row['category']."</td>";
            echo "<td><a href=fupdate.php?id=$uid>Edit</a></td>";
            echo "<td><a href=fdelete.php?id=$uid>Delete</a></td>";            
            echo "</tr>";
        }
    ?>
    </tbody>
</table>
</body>
</html>