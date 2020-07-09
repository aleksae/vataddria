<?php session_start();
error_reporting(0);?>
<?php require "partials/head.php"?>
<?php require "connection.php"?>
<title>Solo validations</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
.forma{
    float: center;
}
input{
    padding: 5px;
    margin: 5px;
}
</style>
</head>
<body>
<div class="container">
<?php
if(isset($_SESSION['id'])){
    require "partials/navbar.php";?>
<div class="forma">
<h3>Add users</h3>
<form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="text" name="name" placeholder="Name of the events" required></input><p style="color: red; display: inline;">*</p><br>
<input type="date" name="datum" placeholder="Date of the event"  required></input><p style="color: red; display: inline;">*</p><br>
<input type="text" name="kratki" placeholder="Short description"  required></input><p style="color: red; display: inline;">*</p><br>
<input type="text" name="dugi" placeholder="Long description" style="width: 50%;"  required></input><br>
<input type="text" name="av1" placeholder="Enter 1st airport"  required maxlength="4"></input><p style="color: red; display: inline;">* Insert 4 letter ICAO code (for example LYBE, LATI...)</p><br>
<input type="text" name="av2" placeholder="Enter 2nd airport"  required maxlength="4"></input><p style="color: red; display: inline;">* Insert 4 letter ICAO code (for example LYBE, LATI...)</p><br>
<input type="text" name="av3" placeholder="Enter 3rd airport" ></input><br>
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload"  required>
  <input type="submit" value="Submit event" name="submit">
  <br>
</form>
</div>
<?php
    $sql = 'SELECT * FROM events ORDER BY event_datum ASC';
    $q = mysqli_query($db,$sql);
    $result=mysqli_fetch_all($q,MYSQLI_ASSOC);
    ?>
     <div id="container">
            <h1>Current events</h1>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Short descirption</th>
                        <th>Banner</th>
                        <th>Remove event</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $row) {?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['event_id']) ?></td>
                            <td><?php echo htmlspecialchars($row['ime']) ?></td>
                            <td><?php echo htmlspecialchars($row['event_datum']); ?></td>
                            <td><?php echo htmlspecialchars($row['event_opis']); ?></td>
                            <td><img src="<?php echo htmlspecialchars($row['event_slika']) ?>" style="width: 200px;"></td>
                            <td><a href="delete_event.php?id=<?php echo $row['event_id']?>">Delete</td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
<?php
}else{
    ?><h2 style="float: center"> YOU DON'T HAVE PERMISSION! <a href="index.php">Login</a></h2><?php
}
?>
</body>
</html>