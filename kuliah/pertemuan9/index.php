<?php 
    require('function.php');
    $title ='home';
    $students = [
        [
            "nama"=>"Dony Laksmana",
            "npm"=>"223040103",
            "email"=>"Donylks111@gmail.com"
        ],
        [
            "nama"=>"muhammad indra krishna",
            "npm"=>"2230401079",
            "email"=>"indra99@gmail.com"
        ],
    ];

    // dd($_SERVER["REQUEST_URI"]);
    // /pw_2023_223040103/Kuliah/pertemuan9/


require('views/index.view.php');
