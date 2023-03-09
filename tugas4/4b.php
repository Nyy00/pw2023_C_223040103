<?php  
$perangkat = ['Motherboard', 'Processor', 'Hard Disk', 'Pc Coller', 'VGA card', 'SSD'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tugas 4B</title>
</head>
<body>
	<h2>Macam-macam Perangkat Keras Komputer</h2>
	<ol>
		<?php foreach ($perangkat as $p) { ?>
		<li><?=$p; ?></li>
		<?php } ?>
        
    </ol>
        
    <h2>Macam-macam perangkat Keras Komputer Baru:</h2>
    <ol>
        <?php 
        array_push($perangkat, "Card Reader", "Modem");
        sort($perangkat);
        ?>
        <?php foreach ($perangkat as $p) { ?>
        <li><?=$p; ?></li>
		<?php } ?>
    </ol>
</body>
</html>
