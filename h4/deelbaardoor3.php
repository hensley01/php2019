<!doctype html>
<html lang="en">
<head>
    <title>code organiseren met functies</title>
</head>
<body>
    <?php

   for ($i = -10 ; $i <= 30 ;$i++) {
       $wellesnietes = checkIfDivisibleBy3($i) ? "" : " NIET ";
       echo "{$i} is{$wellesnietes}deelbaar door 3.<br>\n";
   }
   function checkIfDivisibleBy3($number){
       if ($number % 3 == 0) {
           return true;
       }else{
           return false;
       }
   }

   ?>
}
   </body>
   </html>
