<?php session_start();?>
<?php require "partials/head.php"?>
<?php require "partials/navbar.php"?>
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-6 offset-3">
<?php
if(isset($_SESSION['id'])){?>
<div align="center">
<h1>Welcome to admin panel</h1>
<h3>What would you like to edit</h3>
<a href="solo.php">* Solo validations</a><br>
<a href="vis.php">* Visiting controllers</a><br>
<a href="event.php">* Edit events</a><br>
</div>
<?php
} else{
    echo "<h1>Login or Register</h1>";
}
?>
</div>
</div>
</div>
</body>
</html>