<?php
include 'include/config.php';

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['post'];
$date = time();

$query = "UPDATE post SET title = '$title',content = '$content',date = '$date' where id = '$id'";

$exec = mysqli_query($con, $query);

if ($exec) {
  ?>
  <script>
    alert('Berhasil diubah!');
    location.href = 'blog.php';
  </script>
<?php
} ?>