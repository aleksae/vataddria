<?php require "connection.php"?>
<body>
<div class="container">
<div class="row">
<div class="col-6 offset-3">
<?php
    $sql = 'SELECT * FROM solo ORDER BY Date from DESC';
    $q = mysqli_query($db,$sql);
    $result=mysqli_fetch_all($q,MYSQLI_ASSOC);
    ?>
     <div id="container">
            <h1>Solo validations</h1>
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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $row) {?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['vatsim_id']) ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['surname']); ?></td>
                            <td><?php echo htmlspecialchars($row['position']) ?></td>
                            <td><?php echo htmlspecialchars($row['Date from']); ?></td>
                            <td><?php echo htmlspecialchars($row['Date to']); ?></td>
                            <td><?php echo htmlspecialchars($row['issue_name']) ?></td>
                            <td><?php echo htmlspecialchars($row['issue_id']); ?></td>
                            <td><?php echo htmlspecialchars($row['remarks']);} ?></td>
                        </tr>
                </tbody>
            </table>

        </body>
        </html>