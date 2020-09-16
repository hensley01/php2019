<?php

session_start();
$users = [
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div.error {
            color: red;
        }
    </style>
</head>
<body>
<?php if(!isset($_POST['knop'])) { ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Naam: <input type="text" name="mailadres"  placeholder="mailadres"><br>
        Wachtwoord: <input type="password" name="wachtwoord" placeholder="wachtwoord">
        <input type="submit" name="knop" value="VERSTUUR">
    </form>

    <?php
    if (isset($_SESSION['error']) AND !empty($_SESSION['error'])) {
        echo '<div class="error">' . $_SESSION['error'] . "</div>";
        $_SESSION['error'] = null;

    }
} else {
    if (!isset($_POST['mailadres']) OR empty($_POST['mailadres'])) {
        $_SESSION['error'] = "Je bent vergeten een mailadres in te vullen.";
        header("Location: " . $_SERVER['PHP_SELF']);
    }
    if (!isset($_POST['wachtwoord']) OR empty($_POST['wachtwoord'])) {
        $_SESSION['error'] = "Je bent vergeten een wachtwoord in te vullen.";
        header("Location: " . $_SERVER['PHP_SELF']);
    }

    $mailadres = $_POST['mailadres'];
    $wachtwoord = $_POST['wachtwoord'];

    foreach ($users as $key => $value) {
        if ($key == $mailadres AND $value == $wachtwoord) {
            exit("Welkom!");
        }
    }
    exit("Sorry! Geen toegang!");
}
?>

</body>
</html>