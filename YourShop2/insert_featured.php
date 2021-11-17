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
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>insert Featured products</title>
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
          <a class="navbar-brand" href="home.php">YourShop</a>
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

    <h5 style="text-align:center; margin-bottom:10px;">Inserting into featured products</h5>

    <div class="form">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">ID</label>
              <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image</label>
                <input type="file" name="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">tag</label>
                <input type="text" name="tag" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">price</label>
                <input type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div> 
            <input type="submit" name="insert" value="Insert" class="btn btn-primary">
          </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<?php
  include "connection.php";

  if(isset($_POST['insert'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $tag = $_POST['tag'];
    $price = $_POST['price'];
    
    $filepath = "images/".$_FILES['file']['name'];
    $sql = "insert into featured_products(id,name,image_url,tag,price) values($id,'$name','$filepath','$tag',$price)";
    move_uploaded_file($_FILES['file']['tmp_name'], $filepath);
    echo $sql;
    $query = mysqli_query($con, $sql) or die("query failed");

    if($query){
      echo "data inserted successfully.";
      header('Location:featured_table.php');
    }else{
      echo "failed to insert data.";
    }
  }
}
?>