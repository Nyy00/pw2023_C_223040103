<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Tambah Data User</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3 w-25">
          <label for="userID" class="form-label">user ID</label>
          <input type="text" class="form-control" name="userID" id="userID" maxlength="9" autofocus required>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
          <label for="gender" class="form-label">Jenis Kelamin</label>
          <input type="text" class="form-control" name="gender" id="gender">
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <input type="file" class="form-control" name="gambar" id="gambar">
        </div>
        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data</button>
      </form>
    </div>
  </div>

</div>

<?php require('partials/footer.php'); ?>