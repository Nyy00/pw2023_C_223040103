<?php 
//array
//membuat array

$hari = array('senin','selasa','rabu');
$bulan = ['januari','februari','maret'];
$myArray = ['Dony',18, false];
$binatang = ['🦘','🐊','🦉','🕷️','🐧'];

//mencetak Array
//mencetak 1 element di dalam array menggunakan echo

echo $hari[2];
echo "<hr>";

//mencetak semua isi arary
// var_dump, print_r

var_dump($hari);
echo"<br>";
print_r($bulan);
echo"<br>";
var_dump($myArray);
echo"<br>";
print_r($binatang);
echo"<hr>";

//manipulasi array
//menambahkan element menggunakan index

$hari[3] = 'kamis';
print_r($hari);
echo"<br>";

//menambahkan element di akhir array menggunakan []
$hari[]="jum'at";
$hari[]='sabtu';
$hari[]='minggu';
print_r($hari);
echo"<hr>";

//menambahkan element di akhir array menggunakan array_push
array_push($bulan,'april','mei','juni','july');
print_r($bulan);
echo"<br>";

//menambahkan element di awal array menggunakan array_unshift
array_unshift($binatang,'🐍','🐉');
print_r($binatang);
echo"<hr>";

//menghapus element di belakang array dengan array_pop
array_pop($hari);
print_r($hari);
echo"<hr>";

//menghapus element di depan array dengan array_shiift
array_shift($bulan);
print_r($bulan);

?>