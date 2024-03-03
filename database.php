<?php
    $dsn ='mysql:host=localhost; dbname=login';
    $db_username ="root";
    $db_password="";
    try {
        $db = new PDO($dsn,$db_username,$db_password);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {}
?>