<?php
require('functions.php');

$title = 'Home';

if(isset($_GET['button-search'])) {
    $keyword =$_GET['keyword'];
    $query = "SELECT * FROM
                admin_users
                WHERE
                nama LIKE '%$keyword%' OR
                userID LIKE '%$keyword%'
                ";
    $users =query($query);

}else { 
    $users = query("SELECT * FROM admin_users");

}



require('views/users.view.php');