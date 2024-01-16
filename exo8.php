<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

require 'fonctions.php';
$tab1 = [23,55,44];
$prenoms  = array("pierre","pol","jak");


// print_r($tab1);
// echo "<hr>";
// print_r($prenoms);

// debug($tab1);
// debug($prenoms);

// echo $prenoms[0]."<hr>";
// $taille = count($prenoms); 
//     calcul de longueur d'un tableau.
// parcours de tableau
for ($i = 0; $i > $taille; $i++) {
    echo $prenoms[$i]."<br>";
};

// echo "<hr>";
// foreach($prenoms as $p) {
//     echo$p."<br>";
?>

</body>
</html>

