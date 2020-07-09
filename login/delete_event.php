<?php
require "connection.php";
$id=$_GET['id'];
$sql="DELETE FROM events WHERE event_id=$id";
$query = mysqli_query($db,$sql);
header("Location: event.php");
?>