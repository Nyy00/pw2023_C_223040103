<?php 
    define('URL','/pw_2023_223040103/Kuliah/pertemuan9/');

    function dd ($value)
    {
        echo "<pre>";
        var_dump($value);
        echo"</pre>";
        die();
    }

    function uriIs($uri) {
        return ($_SERVER["REQUEST_URI"]=== URL.$uri) ? 'active' : '';
    }
 ?>