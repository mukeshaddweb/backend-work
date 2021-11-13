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

    <title>Dashboard</title>

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
        <a class="nav-link" href="#">Dashboard</a>
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

    <h1><a href="products_table.php" class="link-dark">All Products</a></h1>
    <h1><a href="" class="link-dark">Featured Products</a></h1>


    <div class="dropdown ">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="category_table.php?category=men">Men</a>
    <a class="dropdown-item" href="category_table.php?category=women">Women</a>
    <a class="dropdown-item" href="category_table.php?category=children">Children</a>
  </div>
</div>
    



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
<?php } ?>