<?php
 require('views/partials/header.php'); 
 require('views/partials/nav.php'); 

//session_start();

/*if (!isset($_SESSION['signin'])) {
  header("Location:signin.php");
  exit;
}*/


require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location:users.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$user = query("SELECT * FROM admin_users WHERE id = $id")[0];


// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'users.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?>


<div class="container mt-3">
  <h1>Ubah Data User</h1>

  <div class="row">
    <div class="col-md-8">
            <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $user["id"]; ?>">
        <div class="mb-3 w-25">
          <label for="userID" class="form-label">user ID</label>
          <input type="text" class="form-control" name="userID" id="userID" maxlength="9" autofocus required value=" <?= $user["userID"]; ?> ">
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" value=" <?= $user["nama"]; ?> ">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" name="email" id="email" value=" <?= $user["email"]; ?> ">
        </div>
        <div class="mb-3">
          <label for="gender" class="form-label">Jenis Kelamin</label>
          <input type="text" class="form-control" name="gender" id="gender" value=" <?= $user["gender"]; ?> ">
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <input type="file" class="form-control" name="gambar" id="gambar" value=" <?= $user["gambar"]; ?> ">
        </div>
        <button class="btn btn-primary" type="submit" name="ubah">Ubah Data</button>
      </form>
    </div>
  </div>

</div>

<?php require('views/partials/footer.php'); ?>
