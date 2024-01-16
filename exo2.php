<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$x = 4;

if($x >= 0) {
    echo "x est positif<br>";
}else {
    echo "x est negatif";
}

// en opérateur ternaire
echo $x >=0 ? "x est positif" : "x est négatif";
// si la comparaisn est vrai (?) affichage de "x est positif"
// sinon affichade de est négatif

switch($x) {
    case 0 :
        echo "est est 0";
        break;
    case 1 : 
        echo "x es 1"; break;
    case 2 :
        echo "x est 2";
        break;
    case 3 : 
        echo "x est 3";
        break;
    case 4 : 
        echo "x est 4";
        break;
    default : 
        echo "bug";
}   

?>
</body>
</html>