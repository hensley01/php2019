<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, td, tr {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=school", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully<br>";
} catch (PDOException $e) {
    //echo "Connection failed: " . $e->getMessage() . '<br>';
}
$query = "SELECT * FROM cursist";
$stmt = $conn->prepare($query) or die('Error 17');
$stmt->execute() or die('Error 21');

echo '<table>';

while ($array = $stmt->fetch()) {
    echo '<tr>';
    echo "<td>" . $array['cursistnr'] . "</td>";
    echo "<td>" . $array['naam'] . "</td>";
    echo "<td>" . $array['roepnaam'] . "</td>";
    echo "<td>" . $array['straat'] . "</td>";
    echo "<td>" . $array['postcode'] . "</td>";
    echo "<td>" . $array['plaats'] . "</td>";
    echo "<td>" . $array['geslacht'] . "</td>";
    echo "<td>" . $array['geb_datum'] . "</td>";
    echo '</tr>';
}

echo '</table>';
?>

</body>
</html>
