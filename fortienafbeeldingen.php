<?php
?>
<!doctype html>
<html>
<head>
    <title>aap tien afbeeldingen</title>
    <style>
        body {
            text-align: center;
        }

        .rood {
            border: red solid 5px;
            padding-right: 5px;
            padding-top: 5px;
        }
        .groen {
            border: green solid 5px;
        }
    </style>
</head>
<body>
<?php
for ($i = 1; $i <= 9; $i++) {
    if ($i % 2 == 0) {
        $class = "class = 'rood'";
        } else {
        $class = "class = 'green'";
    }
echo "<img ".$class."src= 'apen/aap".$i.".jpg'>";
}
?>
</body>
</html>
