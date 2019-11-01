<?php
include 'include/config.php';

$id = uniqid();
$title = $_POST['title'];
$content = $_POST['post_baru'];
$date = time();

$query = "INSERT INTO post (id, title, content, date ) VALUES('$id','$title','$content','$date')";

$exec = mysqli_query($con, $query);

if ($exec) {
  ?>
  <script>
    alert('Berhasil ditambahkan!');
    location.href = 'blog.php';
  </script>
<?php
} ?>