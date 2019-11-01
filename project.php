<?php include 'include/header.php' ?>
<?php include 'super/include/config.php' ?>
<?php
$data = mysqli_query($con, "select * from post order by date desc ");
?>
<section id="project">
  <div class="container">
    <h3>Project kami</h3>
    <small>Berikut merupakan daftar projek yang telah kami lakukan.</small>
    <hr>
    <ol>
      <?php foreach ($data as $row) : ?>
        <li> <a href="rincian.php?id=<?= $row['id'] ?>"><?= $row['title'] ?></a> (<?= date('d-m-Y', $row['date']) ?>) </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<?php include 'include/footer.php' ?>