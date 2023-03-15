<?php 
    $mahasiswa = [
        [
        "nama" => "Dony Laksmana",
        "NRP" =>"223040103",
        "email" =>"donylks111@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"Dony.png",
        ],
        [
        "nama" => "Rafi Ikhsanul Hakim",
        "NRP" =>"223040095",
        "email" =>"rafi909@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"rafi.png",
        ],
        [
        "nama" => "George Frederik Pingak",
        "NRP" =>"223040080",
        "email" =>"George887@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"george.png",
        ],
        [
        "nama" => "Rendy Pratama Putra",
        "NRP" =>"223040102",
        "email" =>"Rendyy122@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"rendy.png",
        ],
        [
        "nama" => "Muhammad Azhar Luthfiadi",
        "NRP" =>"223040086",
        "email" =>"Azhar677@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"ariel.png",
        ],
        [
        "nama" => "Muhammad Ariel Septiadi",
        "NRP" =>"223040073",
        "email" =>"Ariell560@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"ariel.png",
        ],
        [
        "nama" => "Aldi Maulana Fadilah",
        "NRP" =>"223040090",
        "email" =>"AldiMau135@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"aldi.png",
        ],
        [
        "nama" => "Visi Muhammad Ialami",
        "NRP" =>"223040075",
        "email" =>"Visi075@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"visi.png",
        ],
        [
        "nama" => "Irsan Moch.Taufik Febrian",
        "NRP" =>"223040076",
        "email" =>"Irsan076@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"irsan.png",
        ],
        [
        "nama" => "Diki faturrohman",
        "NRP" =>"223040117",
        "email" =>"diki117@gmail.com",
        "Jurusan" => "Teknik Informatika",
        "gambar" =>"diki.png",
        ],
    ];
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>

        <ul>
            <li><img src=img/  <?=$mhs["gambar"]; ?>  ></li>
            <li>Nama : <?=$mhs["nama"]; ?></li>
            <li>NRP : <?=$mhs["NRP"]; ?></li>
            <li>Email : <?=$mhs["email"]; ?></li>
            <li>Jurusan : <?=$mhs["Jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>