<?php

?>


<!doctype html>
<html lang="en">
<head>
    <title>aap loop</title>
</head>
<body>
<?php

$aapImages = array(
        'aap1.jpg',
    'aap2.jpg',
    'aap3.jpg',
    'aap4.jpg',
    'aap5.jpg',
    'aap6.jpg',
    'aap7.jpg',
    'aap8.jpg',
    'aap9.jpg',

);
$teller = 1;
foreach ($aapImages as $image) {
    echo '<img src="apen/' . $image . '" alt="Aap ' . $teller. '">';
        $teller++;
}
?>
</body>
</html>