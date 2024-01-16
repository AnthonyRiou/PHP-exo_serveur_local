<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
require "./fonctions.php";

$matrice = [
    [1,2,3,67],
    [4,5,6,33],
    [7,8,9,54],
];

// Exercice -> faire un tableau avec la $matrice

// <table>
//     <tr>
//         <td>1</td>   
//         <td>2</td>   
//         <td>3</td>   
//         <td>67</td>
//     </tr>   
//     <tr>
//         <td>4</td>   
//         <td>5</td>   
//         <td>6</td>   
//         <td>33</td>
//     </tr>   
//     <tr>
//         <td>7</td>   
//         <td>8</td>   
//         <td>9</td>   
//         <td>54</td>
//     </tr>   

echo "<table border=1>";
foreach ($matrice as $ligne) {
    // debug($ligne)
    echo "<tr>";
    foreach ($ligne as $cell) {
        echo "<td>";
        echo $cell;
        echo "</td>";
    }
    echo "</tr>";
    }
echo "</table>";
?>

</body>
</html>

Autre solution : 

 
<table border = 1>
    <?php foreach($matrice as $ligne) { ?> 
    <tr>
        <?php foreach ($ligne as $cell){ ?>
            <td>
                <?= $cell ?>
            </td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
            


        
