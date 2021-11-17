<?php
    include "connection.php";

    $did = $_GET['id'];
    $query = mysqli_query($con, "delete from cart where id=$did");
    header('Location:cart.php');
    
?>