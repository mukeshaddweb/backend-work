<?php
  include "connection.php";
        session_start();
        $cid= $_SESSION['category_id'];
        // echo $_SESSION['category_id'];
        // echo $cid;
        $uid=$cid;
  $id=$_GET['id'];
//   echo $id;

  //fetching old data

    $sql = "select * from featured_products where id=$id";
  
//   echo $sql;
  $query = mysqli_query($con, $sql) or die("query failed");

  $row=mysqli_fetch_array($query);
//   $id = $_POST['id'];
    $oname = $row['name'];
    $oprice = $row['price'];
    $otag = $row['tag'];
    // $odescription = $row['description'];
    // $otype = $row['type'];
    

    $ofilepath = $row['image_url'];
    // echo $ofilepath;
  
  ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>insert</title>
    <style>
        .form{
            width:50%;
            margin-left: 120px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
  </head>
  <body>
   <!-- ........nav start..... -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">YourShop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- ............nav ends.......... -->

    <div class="form">
        <form method="post" enctype="multipart/form-data">
            <!-- <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">ID</label>
              <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div> -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" value="<?php echo $oname;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image</label>
                <input type="file" name="file" value="<?php echo $ofilepath;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price</label>
                <input type="number" name="price" value="<?php echo $oprice;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tag</label>
                <input type="text" name="tag" value="<?php echo $otag;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <!-- <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" name="description" value="<?php echo $odescription;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Type</label>
                <input type="text" name="type" value="<?php echo $otype;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div> -->
            <input type="submit" name="update" value="update" class="btn btn-primary">
          </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>


  <?php

  if(isset($_POST['update'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $tag = $_POST['tag'];
    // $description = $_POST['description'];
    // $type = $_POST['type'];

    if($_FILES['file']['size']==0){
        $filepath=$ofilepath;
    }else{
        $filepath = "images/".$_FILES['file']['name'];
    }
    
    
      $usql = "update featured_products set name='$name', image_url='$filepath', price=$price, tag='$tag' where id=$id";

    


    move_uploaded_file($_FILES['file']['tmp_name'], $filepath);
    echo $usql;
    $uquery = mysqli_query($con, $usql) or die("query failed");

    if($uquery){
      echo "data updated successfully.";
      header('Location:featured_table.php');
    }else{
      echo "failed to insert data.";
    }
  }
?>