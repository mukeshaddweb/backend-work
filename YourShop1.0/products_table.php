<?php
    include "connection.php";
    session_start();
    if($_SESSION['aemail']==''){
        header('Location:login.php');
    }else{
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

    <title>products table</title>

    <style>
        .logout {
            margin-left: 888px;
        }

        .header {
            background: white;
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
        <a class="nav-link" href="dashboard.php">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="insert_product.php">Insert</a>
    </li>
    <li class="nav-item logout">
        <a class="nav-link" href="logout.php">Logout</a>
    </li>
</ul>

<div class="container-fluid">
    <h1>Hello <?php echo $_SESSION['aname']; ?></h1>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Edit</th>
      <th scope="col">Hide</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $sql = mysqli_query($con, "select * from product_info") or die("product_info query failed.");
    while($rows=mysqli_fetch_array($sql)){    
    ?>
    <tr>
      <th scope="row"><?php echo $rows['id'];?></th>
      <td><img src="<?php echo $rows['image_url'];?>" width="100px" alt=""></td>
      <td><?php echo $rows['name'];?></td>
      <td><?php echo $rows['price'];?></td>
      <td><?php echo $rows['category'];?></td>
      <td><a href="edit.php?id=<?php echo $rows['id'];?>">Edit</a></td>
      <td><a href="hide.php?id=<?php echo $rows['id'];?>">Hide</a></td>
      
    </tr>
    <?php
    }
    ?>
    
  </tbody>
</table>

    



    
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
<?php } ?>