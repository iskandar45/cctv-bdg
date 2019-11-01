<?php

include 'include/config.php';

$id =  $_GET['id'];
$exec = mysqli_query($con, "DELETE FROM post WHERE id = '$id'");

if ($exec) {
  ?>
  <script>
    alert('Berhasil dihapus!');
    location.href = 'blog.php';
  </script>
<?php
} ?>