<?php
    include "connection.php";
    session_start();
    if($_SESSION['aemail']==''){
        header('Location:login.php');
    }else{
        $type = $_GET['type'];
        // $_SESSION['category_id']=$id;
        $cid=$_SESSION['category_id'];
        
        // echo $category;
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    .body {
      height: 100vh;
    }

    .brand_name {
      margin-left: 123px;
      font-size: 30px;
      font-weight: bolder;
    }

    .aname {
      margin-left: 300px;
      margin-right: 350px;
      font-size: 35px;
    }

    .main_row {
      background-color: rgb(106, 113, 121);
      /* height: 100vh; */

    }

    .navcolor {
      background-color: rgb(106, 113, 121);
      height: 80vh;
    }

    .category {
      height: 88vh;
      padding-top: 30px;
      background-color: white;
      overflow: scroll;
    }
  </style>

  <title>dashboard</title>
</head>

<body>
<!-- ..............navbar start ................. -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand brand_name" href="home.php">YourShop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item ">
            <h1 class="aname">Hello
              <?php echo $_SESSION['aname']; ?>
            </h1>
          </li>

          <a class="nav-link" href="logout.php">Logout</a>
          <!-- <button class="btn btn-outline-success" type="submit"></button> -->

      </div>
    </div>
  </nav>

  <!-- ...............navbar ends................. -->


  <!-- ....................main section starts.............. -->

  <div class="container-fluid">
    <div class="row main_row">


      <div class="col-2 navcolor">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active text-light" href="dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="insert_featured.php">Insert featured products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="featured_table.php">Featured Products</a>
          </li>
        </ul>

        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Category
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="fcategory_table.php?id=3">Men</a>
            <a class="dropdown-item" href="fcategory_table.php?id=1">Women</a>
            <a class="dropdown-item" href="fcategory_table.php?id=2">Children</a>
          </div>
        </div>

      </div>
      <div class="col-10 category">

     <h5 style="text-align:center; margin-bottom:10px;">Featured products</h5>

     <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Image</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Edit</th>
              <th scope="col">Hide</th>
            </tr>
          </thead>
          <tbody>

            <?php

$sql="select * from featured_products";

    $query = mysqli_query($con, $sql) or die("category info query failed.");
    while($rows=mysqli_fetch_array($query)){    
    ?>
            <tr>
              <th scope="row">
                <?php echo $rows['id'];?>
              </th>
              <td><img src="<?php echo $rows['image_url'];?>" width="100px" alt=""></td>
              <td>
                <?php echo $rows['name'];?>
              </td>
              <td>
                <?php echo $rows['price'];?>
              </td>
              <td><a href="editfeatured.php?id=<?php echo $rows['id'];?>">Edit</a></td>
              <td><a href="hide.php?id=<?php echo $rows['id'];?>">Hide</a></td>

            </tr>
            <?php
    }
    ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
      </div>
            <!-- ..............filter div ends......... -->

        

  <!-- ..................main section ends.............. -->

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