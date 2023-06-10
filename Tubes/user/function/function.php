<?php
define('BASE_URL', 'pw_2023_223040103/Tubes/user/');

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('KONEKSI GAGAL!');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


function dd($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die;
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $email = mysqli_real_escape_string($conn, $data['email']);
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika username / password kosong
  if (empty($username) || empty($password2) || empty($password2)) {
    echo "<script>
            alert('username / password tidak boleh kosong!');
          </script>";
    return false;
  }

  // jika username sudah ada 
  if (query("SELECT * FROM users WHERE username = '$username'")) {
    echo "<script>
            alert('username sudah terdaftar!');
          </script>";
    return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password !== $password2) {
    echo "<script>
            alert('konfirmasi password tidak sesuai!');
          </script>";
    return false;
  }

  // jika password < 5 digit
  if (strlen($password) < 5) {
    echo "<script>
            alert('password terlalu pendek!');
          </script>";
    return false;
  }

  // jika username & password sudah sesuai
  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO users
              VALUES
            (NULL, '$username','$email', '$password')
          ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

