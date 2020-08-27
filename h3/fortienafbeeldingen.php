<!doctype html>
<html>
<head>

    <title>aap tien afbeeldingen</title>
    <style>
       img {
           width: 150px;
           
       }
        img.green-border {
            border: solid 2px green;
        }
        img.red-border {
            border: solid 2px red;
        }
       </style>
</head>
<body>
<?php
for ($i = 1 ; $i <= 9 ; $i++) {
$borderColor = ($i % 2 == 0) ? "red" : "green";

echo '<img class="' . $borderColor . '-border" src ="apen/aap' . $i . '.jpg" alt="Aap ' . $i . '">';
}
?>
</body>
