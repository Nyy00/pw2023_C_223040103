<?php
require('functions.php');

$title = 'Form Tambah Data';

//insert data ke table mahasiswa ketika tombol di klik
if(isset($_POST['tambah'])) {
   if( tambah ($_POST) > 0) {
    echo "<script>
            alert('data berhasil di tambahkan');
            document.location.href = 'index.php';
            </script>";
   }
}

require('views/tambah.view.php');