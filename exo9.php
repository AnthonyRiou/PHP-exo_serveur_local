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

    $ageEtudiants = ["Mathillde" => 27, "Pol" => 26, "Amandine" => 24];

    debug($ageEtudiants);

    $mailEtudiants["Mathide"] = "mathilde@gmail.com";
    $mailEtudiants["Pol"] = "pol@gmail com";
    $mailEtudiants["Amandine"] = "amandine@gmial.com";
    
    debug($mailEtudiants);

    foreach($mailEtudiants as $cle => $valeur) { ?>
        <h1><?= $cle?></h1>
        <p><?= $valeur?></p>
        <hr>
        <?php 
}


?>
</body>
</html>