<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$users = [
            ['nom' => 'Mathilde', 'mail' => 'mathilde@gmail.com' ],
            ['nom' => 'Jak', 'mail' => 'jak@gmail.com' ],
            ['nom' => 'pol', 'mail' => 'pol@gmail.com' ],
            ['nom' => 'jon', 'mail' => 'jon@gmail.com' ]
        ] ;

        foreach ($users as $cle => $valeur) { ?>
        <h1>Utilisateur <?= $cle ?></h1>
            <?php
            foreach($valeur as $c => $v) { 
                echo '<p>'.$c.' : '.$v.'</p>';
            }

        } ?>
</body>
</html>