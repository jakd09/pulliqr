<?php
require "dbconfig.php";
$query1=$conn->prepare("SELECT lat, lng FROM locations");
$query1->execute();
$coords=$query1->fetchAll(PDO::FETCH_ASSOC);
$iterator=new RecursiveArrayIterator($coords);
foreach($iterator as $key=>$val){
    echo "Latitude: ".$val["lat"]."  ,    Longitude: ".$val["lng"];
}
?>