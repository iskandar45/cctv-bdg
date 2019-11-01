<?php include 'include/header.php'; ?>


<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Selamat Datang!</h6>
    </div>
    <div class="card-body text-center">
      <h3>Selamat Datang, <?= ucfirst($username) ?>!</h3> <br>
      Terakhir diakses pada : <b> <?= $last_login ?> </b><br>
      <hr>
      <a class="btn btn-primary shadow-sm" href="blog.php">Mulai!</a>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->


<?php include 'include/footer.php'; ?>