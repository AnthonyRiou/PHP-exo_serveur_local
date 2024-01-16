<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
// fonctions
// Ici le type renvoyé doit être int depuis la version 7 de php
    function addition (int $a, int $b): int {
        echo $a +$b;
    }

    $res = addition(3,5);
    echo $res."<br>";

    echo addition(66,44)."<br>";

?>
</body>
</html>