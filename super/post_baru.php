<?php include 'include/header.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Post Baru</h1>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Add Post</h6>
    </div>
    <div class="card-body ">
      <form action="post_submit.php" method="post">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label text-left" style="font-size:24px;">Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" id="title" name="title" placeholder="Judul Postingan">
          </div>
        </div>

        <textarea id="post_baru" name="post_baru"></textarea>


        <button class="btn btn-primary btn-lg shadow-lg mt-3" type="submit">Posting</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->


<?php include 'include/footer.php'; ?>