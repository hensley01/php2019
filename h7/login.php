<?php

$users = array(
    "hensley" => array("pwd" => "1234", "rol" => "Administrator"),
    "bert" => array("pwd" => "5678", "rol" => "Gebruiker"),
    "jans" => array("pwd" => "1357", "rol" => "Administrator")

);

if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}
if (isset($_POST['knop'])
&& isset($users[$_POST["login"]])
    && $users[$_POST["login"]] == $_POST['pwd']) {
    $message = "Welkom".$_SESSION["user"];
    $_SESSION["user"] = $_POST["login"];
} else {
    $message = "Inloggen";
}
print_r($_SESSION);
?>

<html xmlns="http://www.w3.org/1999/html">
<body>
<h1> <?php echo $message; ?></h1>
<form action="<?echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
    <label for="login">Login:</label>
    <input type="text" name="login" value="">
</div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" value="">
    </div>
    <input type="submit" name="knop">
</form>
<p><a href="website.php">website</a></p>
<p><a href="login.php? loguit">uitloggen</a></p>
</body>
</html>
