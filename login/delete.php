<?php
require "connection.php";
$id=$_GET['id'];
$sql="DELETE FROM solo WHERE vatsim_id=$id";
$query = mysqli_query($db,$sql);
header("Location: solo.php");
?>