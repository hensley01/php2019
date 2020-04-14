<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zwemclubs</title>
    <style>
        table, tr, td {
            border: solid black 1px;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }

        img {
            width: 25px;
            margin-right: 5px;
        }

        td.plaatjes {
            border: solid white 1px;
        }
    </style>
</head>
<body>
<table>
    <?php
    $zwemclubs = [
        "de spartelkuikens" => 25,
        "de waterbuffels" => 32,
        "plonsmderin" => 11,
        "bommetje" => 23
    ];
    foreach ($zwemclubs as $clubnaam => $zwemmers) {
        echo '<tr>';
// CLUBNAMEN
        echo "<td>$clubnaam</td>";
        // ZWEMMERSAANTALLEN
        echo "<td>$zwemmers</td>";
        //PLAATJES
        echo '<td class="plaatjes">';
        $plaatjes = floor($zwemmers / 5);
        for ($i = 0; $i < $plaatjes; $i++) {
            echo '<img src="//unsplash.it/50" alt="plaatje">';
        }
        echo '</td>';
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>
