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

    function addition (float $a, float $b) {
        echo $a +$b . '<br>';
    }

    addition (3,5);
    addition (3,4.5);
    addition (3.5,4.2);
    addition (3, 'Pierre');
    // fera une erreur de type

?>
</body>
</html>