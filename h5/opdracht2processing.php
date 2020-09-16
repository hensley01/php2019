<?php

$naam = $_POST['naam'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['naam']) && !empty($_POST['naam'])) {
    $naam = $_POST['naam'];
} else {
    echo "Let op: Je hebt geen naam ingevuld!<br>\n";
}
if (isset($_POST['email']) && !empty($_POST['email'])) {
$email = $_POST['email'];
} else {
    echo "Let op: je hebt geen email ingevuld!<br>\n";
}
if (isset($_POST['password']) && !empty($_POST['password'])) {
$password = $_POST['password'];
} else {
    echo "Let op: je hebt geen wachtwoord ingevuld!<br>\n";
}
if (isset($naam) || isset($email) || isset($password)) {
    exit("het script is voortijdig gestopt");
}
echo "<br>je hebt de volgende gegevens ingevuld:<br>\n";
echo "Naam: {$naam}<br>\n";
echo "email: {$email}<br>\n";
echo "Wachtwoord: {$password}<br>\n";