<?php

include 'include/config.php';

$id =  $_GET['id'];
$exec = mysqli_query($con, "DELETE FROM post WHERE id = '$id'");

if ($exec) {
  echo 'sukses';
}
