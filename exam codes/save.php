<?php
include "connect.php";
if(isset($_GET['distance']) && isset($_GET['status'])){
    $distance=$_GET['distance'];
    $status=$_GET['status'];
    $conn->query("INSERT INTO sensor_data(distance,status)VALUES('$distance','$status')");
}
?>