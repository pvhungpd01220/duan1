<?php

    $dns="mysql:host=localhost;dbname=thpthoangdieu";
    $username ='root';
    $password= '';
    $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

    $db= new PDO($dns, $username, $password, $option) or die("Can't connect to database");
?>
