<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img {
            width: 200px;
    </style>
</head>
<body>
<?php

foreach ($_GET['animalnames'] as $animalname) {
    echo '<img src="'.$animalname. '.jpg" alt="' . $animalname. '">' . "<br>";
    echo "{$animalname}.jpg<br>\n";
    }
?>
</body>
</html>



