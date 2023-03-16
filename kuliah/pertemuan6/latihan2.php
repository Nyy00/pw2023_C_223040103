<?php 
//array asosiative
$mahasiswa = [
    [
    "Nama" =>"Dony",
    "Hewan" =>"🦘",
    "Makanan" =>["🍕"]
    ],
    [
    "Nama"=>"Rafi",
    "Hewan" =>"🐊",
    "Makanan" =>["🍔"]
    ],
    [
    "Nama"=>"Susilo",
    "Hewan"=>"🦉",
    "Makanan"=>["🥗"]
    ],
    [
    "Nama"=>"Ervin",
    "Hewan" =>"🕷️",
    "Makanan"=>["🥯"]
    ],
    [
    "Nama"=>"Galang",
    "Hewan"=>"🐧",
    "Makanan"=>["🍨","🥯"]
    ],
    
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>

    <?php foreach ($mahasiswa as $mhs) : ?>

<ul>
    <li>Nama : <?=$mhs["Nama"]; ?></li>
    <li>Hewan Peliharaan : <?=$mhs["Hewan"]; ?></li>
    <li>Makanan Kesukaan : <?php foreach($mhs ["Makanan"] as $mkn) { ?>
        <?=$mkn; ?>
        <?php } ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>