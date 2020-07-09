<?php require "partials/head.php"?>
<?php require "partials/navbar.php"?>
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-6 offset-3">
<form action="register.php" method="POST">
<input type="text" name="name" placeholder="name" class="form-control"><br>
<input type="email" name="email" placeholder="email" class="form-control"><br>
<input type="password" name="password" placeholder="epasswor" class="form-control"><br>
<button type="submit" class="btn btn-primary form-control">Register</button>
</form>
</div>
</div>
</div>
</body>
</html>