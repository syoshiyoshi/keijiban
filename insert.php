<?php
    mb_internal_encoding("utf8");

    $pdo = new PDO("mysql:dbname=lesson01; host=localhost;", "root", "12345");

    $pdo->exec("insert into 4each_keijiban(handlename, title, comments)
        values ('".$_POST['handlename']."', '".$_POST['title']."', '".$_POST['comments']."');");

    header("Location:http://localhost/php_practice/4each_keijiban/index.php");

?>