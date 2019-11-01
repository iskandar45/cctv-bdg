<?php
session_start();
include 'include/config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM user where username = '$username' AND password = '$password'";
$data = mysqli_query($con, $query);
$array = mysqli_fetch_array($data);
$cek = mysqli_num_rows($data);

if ($cek > 0) {
  $_SESSION['username'] = $array['username'];
  $_SESSION['last_login'] = $array['last_login'];
  header('location:index.php');
} else {
  ?>
  <script>
    alert('Username dan Password salah!');
  </script>


<?php
  header('location:login.php');
}
