<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    function bonjour(...$prenoms) {
        // pour chaque élément étant p
        foreach($prenoms as $p) {
            echo "Bonjour".$p."<br>";
        }
    }

    bonjour("Pierre","Pol","Jack","Pauline");

?>
</body>
</html>