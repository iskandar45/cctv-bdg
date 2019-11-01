<?php include 'include/header.php' ?>
<?php include 'super/include/config.php' ?>
<?php
$id = $_GET['id'];
$data = mysqli_query($con, "select * from post where id = '$id'");
?>
<section id="project">
  <div class="container">
    <div class="row">
      <?php foreach ($data as $d) : ?>
        <div class="col l8 s12">
          <h3><?= $d['title'] ?></h3>
          <small>Diposting pada <span style="color: blue; font-weight: bold;"><?= date('D, d M Y H:i:s', $d['date']) ?></span></small>
          <hr>
          <?= $d['content'] ?>
        </div>
      <?php endforeach; ?>


      <div class="col l4 s12">
        <h3>Project Kami</h3>
        <?php
        $data2 = mysqli_query($con, "SELECT * FROM post ORDER BY id DESC LIMIT 1");
        foreach ($data2 as $d2) :
          ?>
          <small>Terakhir diupdate pada <?= date('D, d M Y', $d2['date']) ?></small>
        <?php endforeach; ?>
        <hr>
        <ol>
          <?php
          $data3 = mysqli_query($con, "SELECT * FROM post ORDER BY id DESC LIMIT 5");
          foreach ($data3 as $d3) : ?>
            <li>
              <a href="rincian.php?id=<?= $d3['id'] ?>"><?= $d3['title'] ?>
              </a>
              <div>
                <?= $d3['content'] ?>
              </div>
            </li>
          <?php endforeach; ?>
        </ol>
      </div>
    </div>
  </div>
</section>

<?php include 'include/footer.php' ?>