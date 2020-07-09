<?php
session_start();
require "connection.php";
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT id FROM users WHERE email = '$email' AND password='$password'";
$query = mysqli_query($db,$sql);
$id= mysqli_fetch_assoc($query)['id'];
$name= mysqli_fetch_assoc($query)['name'];
if($id){
    $_SESSION['id']=$id;
    $_SESSION['name']=$name;
    header('Location: index.php');
}else{
    header('Location: login.error.php');
}

?>