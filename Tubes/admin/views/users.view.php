<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Halaman Tambah</h1>

  <a href="tambah.php" class="btn btn-primary">Tambah Data User</a>

  <div class="row">
    <div class="col-md-6">
      <form action="" method="get">
    <div class="input-group my-3">
  <input type="search" class="form-control" placeholder="search student(s)..."name="keyword" id="keyword" autofocus autocomplete="off">
  <button class="btn btn-primary" type="submit" name="button-search" id="button-search" >Search</button>
</div>
      </form>
    </div>
  </div>
  <h3>Daftar User</h3>
<div id="search-container">
  <?php 
  
  if($users) :

  ?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">user ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">gender</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($users as $user) : ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td>
            <img src="img/<?= $user['gambar']; ?>" width="50">
          </td>
          <td><?= $user['userID']; ?></td>
          <td><?= $user['nama']; ?></td>
          <td><?= $user['email']; ?></td>
          <td><?= $user['gender']; ?></td>
          <td><?= $user['gambar']; ?></td>
          <td>
            <a href="ubah.php?id=<?= $user['id']; ?>" class="badge text-bg-warning">ubah</a> |
            <a href="hapus.php?id=<?= $user['id']; ?>" onclick="return confirm('yakin?');" class="badge text-bg-danger">hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php else : ?>

    <div class="col-md-6">
    <div class="alert alert-danger" role="alert">
  student not found!
</div>

    </div>

    <?php endif; ?>
</div>
</div>

<?php require('partials/footer.php'); ?>