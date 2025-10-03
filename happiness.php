<<?php

$servername = "localhost";
$username = "root";
$password ="";
$database = "forever";

$attach = new mysqli($servername, $username, $password, $database);


if ($attach->connect_error) {
    die("Connection failed: " . $attach->connect_error);
}


$sql    = "SELECT id, Name,Location,Identity,Phone FROM friends";

$print= $attach->query($sql);

$friends= [];
if ($print->num_rows > 0) {
    while ($row = $print->fetch_assoc()) {
        $friends[] = $row;
    }
}

$attach->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registered information</title>
</head>
<body>
    <center>
    <h2>List of Registered Users</h2>

    <?php if (count($friends) > 0): ?>
        <table border="1" cellpadding="8">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Location</th>
                <th>Identity</th>
                <th>Phone</th>
            </tr>
            <?php foreach ($friends $friends ): ?>
                <tr>
                    <td><?= $id['id'] ?></td>
                    <td><?= $Name['Name'] ?></td>
                    <td><?= $Location['Location'] ?></td>
                    <td><?= $Identity['Identity'] ?></td>
                    <td><?= $Phone['Phone'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No identity found.</p>
    <?php endif; ?>

    <br>
    </center>
</body>
</html>
