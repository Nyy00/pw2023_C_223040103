<?php 
    $binatang = ['🦘','🐊','🦉','🕷️','🐧',];
    $makanan = ['🍕','🍔','🥗','🥯','🍨'];
    $mahasiswa = ['Dony','Rafi','Susilo','Ervin','Galang'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $i => $m) {?>
    <ul>
        <li>Nama : <?=$mahasiswa[$i]; ?></li>
        <li>Makanan :<?=$makanan[$i]; ?></li>
        <li>hewan peliharaan : <?=$binatang[$i]; ?></li>
    </ul>
    <?php } ?>
</body>
</html>