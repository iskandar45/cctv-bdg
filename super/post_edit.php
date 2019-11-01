<?php include 'include/header.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Edit Postingan</h1>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Edit</h6>
    </div>
    <div class="card-body ">
      <?php
      include 'include/config.php';

      $data2 = mysqli_query($con, "SELECT * FROM post where id = '" . $_GET['id'] . "'");
      ?>
      <form action="_edit-post.php" method="post">
        <?php foreach ($data2 as $row) : ?>
          <div class="form-group row">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <label class="col-sm-2 col-form-label text-left" style="font-size:24px;">Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-lg" id="title" name="title" value="<?= $row['title'] ?>" placeholder="Judul Postingan">
            </div>
          </div>

          <textarea id="post_baru" name="post"><?= $row['content'] ?></textarea>

        <?php endforeach; ?>

        <button class="btn btn-primary btn-lg shadow-lg mt-3" type="submit">Update</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->


<?php include 'include/footer.php'; ?>