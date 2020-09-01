<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kapperszaak opdracht 8</title>
</head>
<body>
<?php

$kappersagenda = [
    "9:15" => "Mevr. Pietersen",
    "9:30" => "Mevr. Willems",
    "9:45" => "",
    "10:00" => "Paul van den Broek",
    "10:15" => "Karel van de Meeuw",
    "10:30" => ""
];
print("De volgende momenten zijn nog beschikbaar: <ul>");
foreach ($kappersagenda as $tijd => $afspraak) {
    if ($afspraak == "") {
        print ("<li>".$tijd."</li>");
    }
}
?>
</body>
</html>


