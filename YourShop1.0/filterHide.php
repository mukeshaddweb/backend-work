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
  if($cid==1){

    $sql = "select * from women where id=$id";

  }elseif($cid==2){

    $sql = "select * from children where id=$id";
      
  }if($cid==3){

    $sql = "select * from men where id=$id";
  }
//   echo $sql;
  $query = mysqli_query($con, $sql) or die("query failed");

  $row=mysqli_fetch_array($query);
//  
    $hide = $row['hide'];
    $type = $row['type'];

    if($hide==0){
        $hide=1;
    }else{
        $hide=0;
    }
    
    if($cid==1){
        // echo $id;
      $usql = "update women set hide=$hide where id=$id";

    }elseif($cid==2){
        // echo $id;
      $usql = "update children set hide=$hide where id=$id";
        
    }if($cid==3){
        // echo "i am in men category.";
// echo $id;
      $usql = "update men set hide=$hide where id=$id";
    }


    echo $usql;
    $uquery = mysqli_query($con, $usql) or die("query failed");

    if($uquery){
      echo "data updated successfully.";
      switch($cid){
        case 1: 
          header('Location:filter_category.php?id=1&type='.$type);
          break;
        case 2:
          header('Location:filter_category.php?id=2&type='.$type);
          break;
        case 3:
          header('Location:filter_category.php?id=3&type='.$type);
          break;
        }
    }else{
      echo "failed to insert data.";
    }
  
?>