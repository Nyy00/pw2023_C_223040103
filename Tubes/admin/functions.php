<?php
// Sesuaikan dengan URL project kalian
define('BASE_URL', '/pw2023_223040103/Tubes/admin/');

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('KONEKSI GAGAL!');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah ($data) {
  $conn = koneksi();

  $userID = $data['userID'];
  $nama = $data['nama'];
  $email = $data['email'];
  $gender = $data['gender'];
  $gambar = upload();

  $query = "INSERT INTO admin_users VALUES (null,'$userID','$nama','$email','$gender','$gambar')";

  mysqli_query($conn,$query)or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    $query = "DELETE FROM admin_users WHERE  id = $id";
  
    mysqli_query($conn, $query) or die (mysqli_error($conn));
  
    return mysqli_affected_rows($conn);
}

function upload()
{
    $nama_file = $_FILES["gambar"]["name"];
    $ukuran_file = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmp_file = $_FILES["gambar"]["tmp_name"];
  
    // cek apakah tidak ada gambar yg diupload
    if ($error == 4) {
       echo "
         <script>
             alert('pilih gambar terlebih dahulu');
         </script>
         ";
      return 'default.png';
    }
  
    // cek apakah yang diupload hanya gambar
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
  
    if (!in_array($ekstensi_file, $daftar_gambar)) {
      echo "
              <script>
                  alert('yang anda pilih bukan gambar');
              </script>
          ";
      return false;
    }
  
    // cek jika ukurannya terlalu besar
    if ($ukuran_file > 5000000) {
      echo "
              <script>
                  alert('ukuran gambar terlalu besar');
              </script>
          ";
      return false;
    }
  
    // lolos pengecekan
    // siap upload
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;

    move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);
  
    return $nama_file_baru;
  }
  

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $userID = htmlspecialchars($data['userID']);
  $email = htmlspecialchars($data['email']);
  $gender = htmlspecialchars($data['gender']);

  $gambar = upload();

  if (!$gambar) {
    return false;
  }

  if ($gambar == 'default.png') {
    $gambar = $gambar_lama;
  }

  $query = "UPDATE admin_users SET
              userID = '$userID',
              nama = '$nama',
              email = '$email',
              gender = '$gender',
              gambar = '$gambar'
            WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die;
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === $uri) ? 'active' : '';
}

