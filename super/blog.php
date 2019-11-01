<?php include 'include/header.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Blog</h1>
    <a href="post_baru.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-pen fa-sm text-white-50"></i> Post Baru</a>
  </div>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Isi</h6>
    </div>
    <div class="card-body ">
      <table class=" table table-bordered table-sm">
        <thead>
          <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Title</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'include/config.php';
          $data = mysqli_query($con, "SELECT * FROM post ORDER BY date DESC");
          $i = 1;
          foreach ($data as $row) : ?>
            <tr>
              <td><?= $i++ ?></td>
              <td><?= $row['id'] ?></td>
              <td><?= $row['title'] ?></td>
              <td><?= date('d/m/Y - H:i:s', $row['date']) ?></td>
              <td>
                <a class="badge badge-sm badge-success" href="post_edit.php?id=<?= $row['id'] ?>">Edit</a>
                <a class="badge bagde-sm badge-danger" onclick="return(confirm('Are you sure?'))" href="delete.php?id=<?= $row['id'] ?>">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->


<?php include 'include/footer.php'; ?>