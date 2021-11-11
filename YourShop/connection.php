<?php
    ob_start();
    error_reporting();
    $con = mysqli_connect('localhost', 'root', '', 'YourShop') or die ("connection failed.");
?>