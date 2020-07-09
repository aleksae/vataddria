<?php
require "connection.php";
$cid=$_POST['id'];
$name=$_POST['name'];
$sname=$_POST['surname'];
$pos=$_POST['pos'];
$df=$_POST['Datef'];
$dt=$_POST['Datet'];
$issn=$_POST['iss_name'];
$issid=$_POST['iss_id'];
$remarks=$_POST['remarks'];
$sql="INSERT INTO solo VALUES('$cid','$name','$sname','$pos','$df','$dt','$issn','$issid','$remarks')";
$query=mysqli_query($db,$sql);

if($query){
    header('Location: solo.php');
} else {
    echo("Greska!");
}