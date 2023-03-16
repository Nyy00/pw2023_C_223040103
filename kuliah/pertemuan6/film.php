<?php 
    $film = [
    [
    "judul" => "Akame ga kill",
    "tahun" =>"2014",
    "genre" =>["action","fantasy"],
    "Pemeran Utama" => ["Akame","Tatsumi"],
    "Studio" =>"white fox",
    "poster" => "akame ga kill.jpg"
    ],
    [
    "judul" => "Attack on titan",
    "tahun" =>"2013",
    "genre" =>["action","Drama","suspense"],
    "Pemeran Utama" => ["Mikasa","Eren"],
    "Studio" =>"A-1 Pictures",
    "poster" => "attack on titan.jpg"
    ],
    [
    "judul" => "Darling in the franx",
    "tahun" =>"2018",
    "genre" =>["action","Drama","romance"],
    "Pemeran Utama" => ["Hiro","zero two"],
    "Studio" =>"wit studio",
    "poster" => "darling in the franx.jpg"
    ],
    [
    "judul" => "Dororo",
    "tahun" =>"2019",
    "genre" =>[ "Historical", "Mythology", "Samurai"],
    "Pemeran Utama" => ["Hyakimaru","Dororo"],
    "Studio" =>"Mappa",
    "poster" => "dororo.jpg"
    ],
    [
    "judul" => "Grand Blue",
    "tahun" =>"2018",
    "genre" =>["comedy"],
    "Pemeran Utama" => ["Chisa","Iori"],
    "Studio" =>"Zero-G",
    "poster" => "grand blue.jpg"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
</head>
<body>
    <h2>Daftar Film</h2>

    <?php foreach ($film as $f) : ?>

<ul>
    <li>
        <img src="img/<?=$f["poster"]; ?>">
    </li>
    <li>Judul : <?=$f["judul"]; ?></li>
    <li>Tahun Rilis : <?=$f["tahun"]; ?></li>
    <li>Genre : <?php foreach($f ["genre"] as $g) { ?>
        <?=$g; ?>
        <?php } ?>
    </li>
    <li>Pemeran Utama : <?php foreach($f ["Pemeran Utama"] as $p) { ?>
        <?=$p; ?>
        <?php } ?>
    </li>
    <li>Studio : <?=$f["Studio"]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>