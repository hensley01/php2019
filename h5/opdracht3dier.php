<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Hoofdstuk 5 opdracht 3</title>
</head>
<body class="container">
<h1>Selecteer welke dieren je wilt zien...</h1>
<form action="opdracht3processing.php" method="get">
    <div class="form-group">
        <select multiple class="form-control" name="animalnames[]" id="animalnames">
            <option value="dog">Hond</option>
            <option value="bird">Vogel</option>
            <option value="tiger">Tijger</option>
            <option value="dragon">Draak</option>
            <option value="bear">Beer</option>
        </select>
    </div>
    <button class="btn btn-primary">SHOW ME THE ANIMALS!</button>
</form>
<?php

?>
</body>
</html>