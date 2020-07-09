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
<form action="add.php" method="POST">
<input type="number" name="id" placeholder="Trainee id"></input><br>
<input type="text" name="name" placeholder="Trainee name"></input><br>
<input type="text" name="surname" placeholder="Trainee surname"></input><br>
<input type="text" name="pos" placeholder="Position"></input><br>
<input type="date" name="Datef" placeholder="Valid from"></input><br>
<input type="date" name="Datet" placeholder="Valid until"></input><br>
<input type="text" name="iss_name" placeholder="Issuer name"></input><br>
<input type="number" name="iss_id" placeholder="Issuer id"></input><br>
<input type="text" name="remarks" placeholder="Remarks"></input><br>
<button type="submit">Submit</button>
</form>
</div>
<?php
    $sql = 'SELECT * FROM solo ORDER BY Datum_from ASC';
    $q = mysqli_query($db,$sql);
    $result=mysqli_fetch_all($q,MYSQLI_ASSOC);
    ?>
     <div id="container">
            <h1>Existing users</h1>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>CID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Position</th>
                        <th>Valid from</th>
                        <th>Valid until</th>
                        <th>Issuer name</th>
                        <th>Issuer CID</th>
                        <th>Remarks</th>
                        <th>Delete user</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $row) {?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['vatsim_id']) ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['surname']); ?></td>
                            <td><?php echo htmlspecialchars($row['position']) ?></td>
                            <td><?php echo htmlspecialchars($row['Datum_from']); ?></td>
                            <td><?php echo htmlspecialchars($row['Date to']); ?></td>
                            <td><?php echo htmlspecialchars($row['issue_name']) ?></td>
                            <td><?php echo htmlspecialchars($row['issue_id']); ?></td>
                            <td><?php echo htmlspecialchars($row['remarks']); ?></td>
                            <td><a href="delete.php?id=<?php echo $row['vatsim_id']?>">Delete</td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
                    <?php
}else{
    ?><h2 style="float: center"> YOU DON'T HAVE PERMISSION! <a href="index.php">Login</a></h2><?php
}
?>
</div>
</body>
</html>