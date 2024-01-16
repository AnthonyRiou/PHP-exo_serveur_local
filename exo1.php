<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    echo "<p>Document</p>";
?>

<h1>Document</h1>

<?php
$uneChaine = "lorem ipsum";
echo "<p>".$uneChaine."</p>";

    $x = 1;
    $y = 4;
    $z = $x +$y;
    echo "<p>".$x."+".$y."=".$z."</p>";
    $w = $y++;
   

    if($y > 2) {
        echo"y est supérieur à 2";
    }else if ($y < 2) { 
        echo "y est inférieur à 2";
    }else {
        echo "x est égal à 2";
    };
    

?>

</body>
</html>