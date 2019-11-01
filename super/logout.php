<?php
session_start();
include 'include/config.php';


$username = $_SESSION['username'];
$date = date('d-M-Y H:i:s');

$query = "update user set last_login ='$date' where username = '$username'";
mysqli_query($con, $query);


session_destroy();
header('location:login.php');
