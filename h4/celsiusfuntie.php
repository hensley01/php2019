<?php

if ($_POST) {
    $fahrenheit = $_POST['fahrenheit'];
    //dit is de berekening van fahrenheit naar celsius
    $celsius = ($fahrenheit - 32)*5/9;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
    <title>Zet Celcius om in Fahrenheit</title>
</head>
<body>
<form action="" method="post">
    Fahrenheit: <input type="text" name="fahrenheit" /><br/>
    <?php
    if (isset($celsius)){
        echo "Celcius = ".$celsius;
    }
    ?>
</form>
</body>
</html>
