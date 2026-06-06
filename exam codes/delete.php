<?php
include "connect.php";
$id=$_GET['id'];
$conn->query("DELETE FROM sensor_data WHERE id='$id'");
header("location:dashboard.php");
?> 