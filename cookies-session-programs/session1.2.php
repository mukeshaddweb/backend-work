<?php
session_start();
echo "hello ".$_SESSION['user'];

session_destroy();

?>