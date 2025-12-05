<?php
    $dbservername="mysql";
    $dbusername="root";
    $dbpassword="root";
    $dbname="mapdb";
    $conn=new PDO("mysql:host=$dbservername;dbname=$dbname", $dbusername, $dbpassword);
?>