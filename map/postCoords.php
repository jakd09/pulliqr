<?php
require 'dbconfig.php';
$longitude=$_REQUEST["lng"];
$latitude=$_REQUEST["lat"];
$query1=$conn->prepare("SELECT MAX(id) FROM locations");
$query1->execute();
$id=$query1->fetchColumn();
if($id){
    $id++;
}else{
    $id=1;
}
$query1=$conn->prepare("INSERT INTO locations(id, lat, lng)
VALUES (".$id.", ".$latitude.", ".$longitude.")");
$query1->execute();
?>