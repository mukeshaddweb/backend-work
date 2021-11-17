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
    <style>

        .body{
          height: 100vh;
        }

        .brand_name{
          margin-left: 123px;
          font-size: 30px;
          font-weight: bolder;
        }

        .aname{
          margin-left:300px;
          margin-right:350px;
          font-size: 35px;
        }
        .navcolor{
            background-color: rgb(106, 113, 121);
            /* height: 100vh; */
        }

        .category{
          /* height:100vh; */
          padding-top: 30px;
        }
    </style>

    <title>dashboard</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand border border-dark px-3 brand_name" href="home.php">YourShop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
              <li class="nav-item ">
              <h1 class="aname">Hello <?php echo $_SESSION['aname']; ?></h1>
              </li>
              
              <a class="nav-link" href="logout.php">Logout</a>
              <!-- <button class="btn btn-outline-success" type="submit"></button> -->
            
          </div>
        </div>
      </nav>
    

      <div class="container-fluid">
          <div class="row">
              <div class="col-2 navcolor">
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active text-light" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="insert_category.php">Insert category</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="featured_table.php">Featured Products</a>
                    </li>
                    
                  </ul>

                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="fcategory_table.php?id=3">Men</a></li>
                      <li><a class="dropdown-item" href="fcategory_table.php?id=1">Women</a></li>
                      <li><a class="dropdown-item" href="fcategory_table.php?id=2">Children</a></li>
                    </ul>
                  </div>
                  
              </div>
              <div class="col-10 category">

                <div class="site-section site-blocks-2">
                    <div class="container">
                      <div class="row">
              
                      <?php
              
                      $sql = "select * from category_image";
                      $query = mysqli_query($con, $sql) or die("error in query.");
              
                      $rows = mysqli_num_rows($query);
                      // $row = mysqli_fetch_array($query);
                      // echo $row['name'];
                        while($row=mysqli_fetch_array($query)){
                          $name=$row['name'];
                          $img=$row['image_url'];
                          $id=$row['id'];
                          ?>
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                           <a class="block-2-item" href="fcategory_table.php?id=<?php echo $id;?>">
                             <figure class="image">
                               <img src="<?php echo $img;?>" alt="" class="img-fluid">
                             </figure>
                             <div class="text">
                              <span class="text-uppercase">Collections</span>
                               <h3><?php echo $name;?></h3>
                             </div>
                           </a>
                         </div>
                         <?php
                         }
                      ?>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php } ?>