<?php
?>

<!doctype html>
<html lang="en">
<head>
    <title>code organiseren met functies</title>
</head>
<body>
<ul>
<?php
$dieren = array("aap", "beer", "konijn", "vis");
$sporten = array("handbal", "handbal", "hockey", "schaatsen");
shuffle($sporten);
echo "<li>Er zijn ".count($sporten)." sporten in de array</li>";
    geefArrayWeerAlsLijst($sporten);
    geefArrayWeerAlsLijst($dieren);

    function geefArrayWeerAlsLijst($arr) {
        foreach ($arr as $arr_element) {
            echo "<li>".$arr_element."</li>";
        }
    }


?>
</ul>
</body>
</html>
